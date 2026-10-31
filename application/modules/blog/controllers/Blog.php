<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {

    function __construct(){
        parent::__construct();
        @$this->load->database();
        $this->load->helper(['url', 'text']);
    }

    private function slugify($text) {
        $text = strtolower(trim((string)$text));
        $text = preg_replace('~[^a-z0-9\s-]~', '', $text);
        $text = preg_replace('~[\s-]+~', '-', $text);
        return trim($text, '-');
    }

    private function resolveImage($image) {
        if (empty($image)) {
            return base_url('assets/img/home-about.jpg');
        }
        if (preg_match('~^https?://~i', $image)) {
            return $image;
        }
        if (file_exists(FCPATH . 'assets/uploads/blog/' . $image)) {
            return base_url('assets/uploads/blog/' . $image);
        }
        if (file_exists(FCPATH . 'uploads/blogs/' . $image)) {
            return base_url('uploads/blogs/' . $image);
        }
        if (file_exists(FCPATH . $image)) {
            return base_url($image);
        }
        return base_url('assets/img/home-about.jpg');
    }

    private function loadBlogs() {
        $blogs = [];
        try {
            $db = $this->db;
            if ($db && $db->conn_id) {
                $db->order_by('b_id', 'DESC');
                $q = $db->get('blog');
                if ($q && $q->num_rows() > 0) {
                    foreach ($q->result_array() as $row) {
                        $row['id'] = $row['b_id'];
                        $row['content'] = !empty($row['content']) ? $row['content'] : (!empty($row['description']) ? $row['description'] : '');
                        
                        // Parse created_at safely
                        $created_at = !empty($row['timestamp']) ? $row['timestamp'] : null;
                        if (!$created_at && !empty($row['date'])) {
                            $date_formatted = str_replace('/', '-', $row['date']);
                            $parsed_time = strtotime($date_formatted . ' ' . (!empty($row['time']) ? $row['time'] : '00:00'));
                            if ($parsed_time) {
                                $created_at = date('Y-m-d H:i:s', $parsed_time);
                            }
                        }
                        $row['created_at'] = $created_at ?: date('Y-m-d H:i:s');
                        
                        if (empty($row['slug'])) {
                            $row['slug'] = $this->slugify($row['title']);
                        }
                        if (empty($row['slug'])) {
                            $row['slug'] = 'blog-' . $row['b_id'];
                        }
                        $row['slug'] = strtolower(trim($row['slug']));

                        if (empty($row['author'])) {
                            $row['author'] = 'Admin';
                        }
                        
                        $row['image_url'] = $this->resolveImage($row['image'] ?? '');
                        $blogs[] = $row;
                    }
                }
            }
        } catch (Throwable $e) {
            $blogs = [];
        } catch (Exception $e) {
            $blogs = [];
        }

        if (!empty($blogs)) {
            return $blogs;
        }

        $path = FCPATH . 'admin_data/blogs.json';
        if (file_exists($path)) {
            $json = json_decode(file_get_contents($path), true);
            if (!empty($json)) {
                foreach ($json as &$item) {
                    $item['image_url'] = $this->resolveImage($item['image'] ?? '');
                }
                return $json;
            }
        }

        return [];
    }

    function index() {
        redirect('blog/view');
    }

    function view(){
        $this->load->library('pagination');

        $all_blogs = $this->loadBlogs();
        $total_rows = count($all_blogs);
        $per_page = 6;
        $offset = (int) $this->uri->segment(3);

        $config['base_url'] = site_url('blog/view');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<ul class="styled-pagination clearfix text-center">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="#" class="active rc_first_hr color_dark">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = 'First';

        $this->pagination->initialize($config);

        $data['blogs'] = array_slice($all_blogs, $offset, $per_page);
        $data['total'] = $total_rows;
        $data['recent_posts'] = array_slice($all_blogs, 0, 5);

        $data['title'] = "Official Blog of " . ($this->comp['company3'] ?? 'Omraj Packers and Movers') . " India";
        $data['description'] = "Latest blog of " . ($this->comp['company3'] ?? 'Omraj Packers and Movers');
        $data['module'] = "blog";
        $data['view_file'] = "blog"; 

        echo Modules::run('template/layout2', $data);
    }

    function read($slug = '') {
        $all_blogs = $this->loadBlogs();
        $selected_blog = null;
        
        $search_slug = strtolower(trim(str_replace('_', '-', (string)$slug)));

        foreach ($all_blogs as $b) {
            $custom_slug = strtolower(trim($b['slug'] ?? ''));
            $auto_slug = strtolower(trim($this->slugify($b['title'] ?? '')));
            $id = (string)($b['id'] ?? $b['b_id'] ?? '');

            if (
                (!empty($custom_slug) && $custom_slug === $search_slug) || 
                (!empty($auto_slug) && $auto_slug === $search_slug) ||
                ($id === $search_slug)
            ) {
                $selected_blog = (object) $b;
                break;
            }
        }

        if ($selected_blog) {
            $data['query'] = [$selected_blog];
            $data['recent_posts'] = array_slice($all_blogs, 0, 5);
            
            $data['title'] = !empty($selected_blog->meta_title) ? $selected_blog->meta_title : ucfirst($selected_blog->title);
            $data['description'] = !empty($selected_blog->meta_desc) ? $selected_blog->meta_desc : word_limiter(strip_tags($selected_blog->description), 200);
            
            $data['img'] = $selected_blog->image_url ?? $this->resolveImage($selected_blog->image ?? '');
            
            $data['module'] = "blog";
            $data['view_file'] = "view"; 

            echo Modules::run('template/layout2', $data);
        } else {
            show_404();
        }
    }
}
