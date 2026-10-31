<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Intro widget below slider
$this->load->view('intro_widget');

// Load the About widget
$this->load->view('about_widget');

// Load the Services widget
$this->load->view('service_widget');

// Load the Why Choose Us widget
$this->load->view('why_choose_widget');
// load the proces widget 
$this->load->view('process_widget');

// Load the Verified Credentials widget
$this->load->view('verified_widget');

// Load the Testimonials / Reviews slider widget
$this->load->view('review_widget');

// Load the Frequently Asked Questions (FAQs) widget
$this->load->view('faqs_widget');
?>
