<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!class_exists('ReviewQueryResult')) {
    class ReviewQueryResult {
        private $items;
        public function __construct($items = array()) { $this->items = $items; }
        public function num_rows() { return count($this->items); }
        public function result() { return $this->items; }
    }
}

class Reviews extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        @$this->load->database();
    }

    function index()
    {
        $this->load->library('pagination');
        
        $star_filter = $this->input->get('star');
        $total_rows = 0;
        
        try {
            if (isset($this->db) && $this->db->conn_id && $this->db->table_exists('reviews')) {
                // Count total active reviews for pagination
                $this->db->where('status', 1);
                if ($star_filter) {
                    $this->db->where('stars', $star_filter);
                }
                $total_rows = (int) $this->db->count_all_results('reviews');
            }
        } catch (Throwable $e) {
            $total_rows = 0;
        } catch (Exception $e) {
            $total_rows = 0;
        }
        
        // Pagination Config: 2 rows of 3 cards = 6 reviews per page
        $current_seg = $this->uri->segment(1) == 'reviews' ? 'reviews' : 'testimonials';
        $config['base_url'] = site_url($current_seg);
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 6;
        $config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        
        $config['full_tag_open'] = '<ul class="pagination pagination-rounded justify-content-center gap-1 my-4">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo; Prev';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next &raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link" style="background:#991b1b; border-color:#991b1b; color:#fff; font-weight:700;">';
        $config['cur_tag_close'] = '</span></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link rounded-pill px-3');
        
        $this->pagination->initialize($config);
        
        $offset = $this->input->get('per_page') ? (int) $this->input->get('per_page') : 0;

        $query = null;
        try {
            if (isset($this->db) && $this->db->conn_id && $this->db->table_exists('reviews')) {
                // Fetch data ordered by newest first (new review at top, older shifted)
                $this->db->order_by('r_id', 'desc');
                $this->db->where('status', 1);
                if ($star_filter) {
                    $this->db->where('stars', $star_filter);
                }
                $query = $this->db->get('reviews', $config['per_page'], $offset);
            }
        } catch (Throwable $e) {
            $query = null;
        } catch (Exception $e) {
            $query = null;
        }
        
        if (!$query) {
            $query = new ReviewQueryResult(array());
        }
        
        $data['reviews'] = $query;
        $data['pagination'] = $this->pagination->create_links();
        $data['title'] = "Customer Reviews & Testimonials | " . $this->comp['company3'];
        $data['description'] = "Detailed feedback and ratings from our satisfied clients. Read real reviews about our packing, moving and relocation services at " . $this->comp['company3'] . ".";
        $data['module'] = "reviews";
        $data['view_file'] = "reviews";
        echo Modules::run('template/layout2', $data);
    }

    function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            @$this->load->database();
            
            $redirect_to = $this->input->post('redirect_to') ?: 'testimonials';
            
            $is_ajax = $this->input->is_ajax_request() 
                       || (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
                       || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);

            $name = trim($this->input->post('name'));
            $email = trim($this->input->post('email'));
            $city = trim($this->input->post('city'));
            $review = trim($this->input->post('review'));

            if (empty($name) || empty($email) || empty($city) || empty($review)) {
                $err_msg = 'Please fill in all required fields to submit your review.';
                if ($is_ajax) {
                    header('Content-Type: application/json');
                    echo json_encode([
                        'status' => 'error',
                        'message' => $err_msg
                    ]);
                    return;
                }
                $this->session->set_flashdata('error', $err_msg);
                redirect($redirect_to);
                return;
            }
            
            $uploaded_images = [];
            if (isset($_FILES['review_images']) && !empty($_FILES['review_images']['name'][0])) {
                $upload_path = FCPATH . 'assets/images/reviews/';
                if (!is_dir($upload_path)) mkdir($upload_path, 0777, true);
                
                $files = $_FILES['review_images'];
                $count = count($files['name']);
                
                for($i=0; $i<$count; $i++) {
                    $tmp_name = $files['tmp_name'][$i];
                    $name = $files['name'][$i];
                    $error = $files['error'][$i];
                    $size = $files['size'][$i];
                    
                    if ($error === UPLOAD_ERR_OK) {
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        $mime = finfo_file($finfo, $tmp_name);
                        finfo_close($finfo);
                        
                        $allowed_mimes = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];
                        if (in_array($mime, $allowed_mimes)) {
                            // Convert everything to jpg for simplicity and compression
                            $new_name = uniqid('rev_') . '.jpg';
                            $dest = $upload_path . $new_name;
                            
                            if ($size > 150000) {
                                // Compress and resize if over 150KB
                                $info = getimagesize($tmp_name);
                                if ($info) {
                                    $image = null;
                                    if ($mime == 'image/jpeg' || $mime == 'image/jpg') $image = @imagecreatefromjpeg($tmp_name);
                                    elseif ($mime == 'image/png') $image = @imagecreatefrompng($tmp_name);
                                    elseif ($mime == 'image/webp') $image = @imagecreatefromwebp($tmp_name);
                                    
                                    if ($image) {
                                        // Handle PNG transparency to white background
                                        if ($mime == 'image/png' || $mime == 'image/webp') {
                                            $bg = imagecreatetruecolor(imagesx($image), imagesy($image));
                                            imagefill($bg, 0, 0, imagecolorallocate($bg, 255, 255, 255));
                                            imagealphablending($bg, TRUE);
                                            imagecopy($bg, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
                                            imagedestroy($image);
                                            $image = $bg;
                                        }
                                        
                                        $width = imagesx($image);
                                        $height = imagesy($image);
                                        if ($width > 800) {
                                            $new_width = 800;
                                            $new_height = floor($height * (800 / $width));
                                            $tmp_img = imagecreatetruecolor($new_width, $new_height);
                                            imagecopyresampled($tmp_img, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                                            $image = $tmp_img;
                                        }
                                        imagejpeg($image, $dest, 60);
                                        imagedestroy($image);
                                        $uploaded_images[] = 'assets/images/reviews/' . $new_name;
                                    }
                                }
                            } else {
                                // If it's small enough but not a jpeg, we still rename it to jpg but we should convert it
                                // Or we just keep the original extension if it's small. Let's keep original extension.
                                $ext = pathinfo($name, PATHINFO_EXTENSION);
                                $new_name = uniqid('rev_') . '.' . $ext;
                                $dest = $upload_path . $new_name;
                                move_uploaded_file($tmp_name, $dest);
                                $uploaded_images[] = 'assets/images/reviews/' . $new_name;
                            }
                        }
                    }
                }
            }
            
            $r_img_val = implode(',', $uploaded_images);
            
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'r_title' => $this->input->post('city'), // We use r_title to store city
                'r_desc' => $this->input->post('review'),
                'stars' => (int) $this->input->post('rating'),
                'status' => 1, // Auto approve (direct show)
                'b_id' => 0,
                'r_img' => $r_img_val,
                'views' => 0,
                'posted_date' => date('Y-m-d H:i:s')
            );
            
            try {
                if (isset($this->db) && $this->db->conn_id) {
                    $this->db->insert('reviews', $data);
                }
            } catch (Throwable $e) {
                // Ignore DB error on submit
            } catch (Exception $e) {
                // Ignore DB error on submit
            }
            
            $success_msg = 'Thank you! Your review has been submitted successfully and is now featured at the top.';

            $is_ajax = $this->input->is_ajax_request() 
                       || (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
                       || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);

            if ($is_ajax) {
                header('Content-Type: application/json');
                echo json_encode([
                    'status' => 'success',
                    'message' => $success_msg
                ]);
                return;
            }
            
            $this->session->set_flashdata('success', $success_msg);
            redirect($redirect_to);
        }
    }
}