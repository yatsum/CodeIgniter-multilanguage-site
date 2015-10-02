<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Token_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api_model');
    }

    public function validate($token)
    {
        return $this->api_model->validate_token($token);
    }
}