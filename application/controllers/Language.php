<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends Public_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->render('public/language_view');
    }

    public function set_language($lang)
    {
        if (! $lang) {
            return ;
        }
        $this->session->set_userdata('language', $lang);
    }
}
