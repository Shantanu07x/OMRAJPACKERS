<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Customer Reviews &amp; Testimonials',
    'bc_desc' => "Real Stories &amp; Verified Feedback From Our Relocation Clients",
    'breadcrumbs' => [
        ['name' => 'About Us', 'url' => site_url('about-us')],
        ['name' => 'Testimonials']
    ]
]);
?>

<!-- Testimonials Slider Widget -->
<?php $this->load->view('home/review_widget'); ?>