<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "Page Not Found | " . $this->comp['company3'];
        $data['description'] = "The requested page was not found at " . $this->comp['company3'] . ".";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = $this->comp['company3'] . "| All India Shifting | @" . $this->comp['phone'];
        $data['description'] = "Omraj Packers and movers for home shifting, office relocation and bike transport. Door-to-door service across all India - get a free quote. @" . $this->comp['phone'];

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()

    {

        // if (@$this->uri->segment(1) == "packers-movers-bihar-india") {
        //     redirect("bihar", 'location', 301);
        // }
    }
}
