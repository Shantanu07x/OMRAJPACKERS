<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 9902200448';
        $this->comp['phonehtml'] = 'tel:+919902200448';
        $this->comp['phone1'] = '+91 9902200448';
        $this->comp['phonehtml1'] = 'tel:+919902200448';
        $this->comp['supportmail'] = 'info@omrajpackers.com';
        $this->comp['replyToMail'] = 'info@omrajpackers.com';
        $this->comp['mail'] = 'omrajpackers43@gmail.com';    
        $this->comp['mailhtml'] = "mailto:omrajpackers43@gmail.com";
        $this->comp['company3'] = 'Omraj Packers and Movers';
        $this->comp['companydomain'] = 'omrajpackers.com';

        $this->comp['facebookhtml'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitterhtml'] = "";
        $this->comp['linkedinhtml'] = "";
        $this->comp['whatsapphtml'] = "https://wa.me/919902200448";

        $this->comp['address'] = "Shop No- 2, GF, Mother Teresa Path, Near UCO Bank, West Ramkrishna Nagar, Patna- 800027";
        $this->comp['branchAddress'] = "Flat No 102, 1st Floor, Near Bank of India, Ramkrishna nagar, Patna- 800027";
        $this->comp['address1'] = "Shop No- 2, GF, Mother Teresa Path, Near UCO Bank, West Ramkrishna Nagar";
        $this->comp['address2'] = "Patna- 800027";
        $this->comp['addressRegion'] = "Patna";
        $this->comp['postalCode'] = "800027";
        $this->comp['companystate'] = "Bihar";
        $this->comp['themeColor'] = "#0a4ebd";

        $this->comp['experience'] = "40+";
        $this->comp['startYear'] = "1986";

        $this->comp['happyClients'] = "39,850+";
        $this->comp['yearsExperience'] = "40+";
        $this->comp['secureShifting'] = "100%";
        $this->comp['statesCovered'] = "20+";

        $this->comp['sku'] = "PM28957";
        $this->comp['mpn'] = "SPM28957";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "39850";
        $this->comp['datePublished'] = "15 May, 2026";
        $this->comp['reviewBody'] = "Best Packing And Moving Company in India.";
        $this->comp['reviewperson'] = "Arshad Ali";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }

    public function __isset($name)
    {
        return isset(CI::$APP->$name);
    }
}
