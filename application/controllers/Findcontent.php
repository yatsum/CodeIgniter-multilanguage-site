<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Findcontent extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 'Oops! Custom 404';
        show_404();
    }
}