<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status_model extends MY_Model
{
    protected $connection_status;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api_model');
    }

    public function get_connection_status()
    {
        return $this->api_model->get_connection_status();
    }
}