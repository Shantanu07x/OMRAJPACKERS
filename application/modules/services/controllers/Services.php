<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('household-goods-shifting', 'location', 301);
    }

    function homeShifting()
    {
        $data['title'] = "Household Goods Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Reliable, safe, and professional household goods shifting services by " . $this->comp['company3'] . ". 100% damage-free packing, safe container transport, and doorstep unpacking across India.";
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Professional Office Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure office shifting services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function bike()
    {
        redirect('vehicle-transportation', 'location', 301);
    }

    function car()
    {
        redirect('vehicle-transportation', 'location', 301);
    }

    function packingMoving()
    {
        $data['title'] = "Packing and Unpacking Services | " . $this->comp['company3'];
        $data['description'] = "Secure multi-layer packing and doorstep unpacking services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Loading and Unloading Services | " . $this->comp['company3'];
        $data['description'] = "Safe, systematic and professional loading and unloading services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }

    function storage()
    {
        $data['title'] = "Warehousing & Storage Solutions | " . $this->comp['company3'];
        $data['description'] = "Secure, pest-controlled and 24/7 CCTV-monitored warehousing and storage solutions by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "warehousing";
        echo Modules::run('template/layout2', $data);
    }

    function localDomestic()
    {
        $data['title'] = "Local & Domestic Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Reliable, safe local and interstate domestic moving services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "local_domestic";
        echo Modules::run('template/layout2', $data);
    }

    function vehicleTransportation()
    {
        $data['title'] = "Vehicle Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Safe and scratch-free car and bike transportation services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "vehicle_transportation";
        echo Modules::run('template/layout2', $data);
    }

    function insurance()
    {
        $data['title'] = "Transit Insurance Coverage | " . $this->comp['company3'];
        $data['description'] = "100% comprehensive transit insurance coverage for complete protection by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "insurance";
        echo Modules::run('template/layout2', $data);
    }
}

