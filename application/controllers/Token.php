<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Token extends Public_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('token_model');
    }

    public function validate()
    {
        $result = $this->token_model->validate($this->input->post('token'));
            
        if ($result == 'success') {
            //do whatever needed to authenticate user
            //
            redirect('home/status');
 
        }

        if ($result == false) {
            $this->session->set_flashdata('error', 'Invalid token lah!');
            redirect('');
 
        }

    }
}
