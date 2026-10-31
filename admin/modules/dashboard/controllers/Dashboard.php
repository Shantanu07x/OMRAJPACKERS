<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MX_Controller
{
    //wGtRkO8VoEyUjS
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
    }
    function index()
    {
//         $this->load->view('view');
    }
    function admin()
    {
        $this->load->view('view');
    }
    function fetch_cards_data()
    {
        // Prevent CodeIgniter from halting on database errors
        $this->db->db_debug = FALSE;

        $tables = array(
            "bookings" => "bookings",
            "contact"  => "contacts",
            "blog"     => "blog",
            "reviews"  => "reviews",
            "logs"     => "logs"
        );
        $data = array();
        foreach ($tables as $key => $table) {
            $data[$key] = 0;
            try {
                $q = @$this->db->get($table);
                if ($q && is_object($q) && method_exists($q, 'num_rows')) {
                    $data[$key] = $q->num_rows();
                }
            } catch (Exception $e) {
                $data[$key] = 0;
            } catch (Throwable $t) {
                $data[$key] = 0;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }


}
