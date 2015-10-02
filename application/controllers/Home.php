<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->language('home_lang', $this->get_language_folder());

    }

    public function index()
    {
        $this->load->library('form_validation');
        $this->render('public/homepage_view');
    }
}
