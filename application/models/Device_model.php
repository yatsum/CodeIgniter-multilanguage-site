<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Device_model extends MY_Model
{
    public $ip_address;
    public $coova_session;

    public function __construct()
    {

        parent::__construct();
        $this->load->model('api_model');
        $this->init();
    }

    /**
     * intialize device data
     * @return mixed
     */
    public function init()
    {
        $this->ip_address = $this->get_device_ip();
        $this->set_coova_session();

    }
    
    public function get_device_ip()
    {
        //should use $this->input->ip_address();
        //
        //mocking
        return '192.168.10.50';

    }

    public function set_coova_session()
    {
        $this->coova_session = $this->get_coova_session_by_ip();
    }

    /**
     * [get_coova_session_by_ip description]
     * @return [type] [description]
     * @return array Coova session data in array
     */
    public function get_coova_session_by_ip($ip = null)
    {
        if ($ip == null) {
            $ip = $this->ip_address;
        }

        $data = $this->api_model->get_coova_session_by_ip($ip);

        return json_decode($data);
    }

    /**
     * Tp init another device explicitly using IP
     * @param  string $ip
     * @return object
     */
    public function load_device_by_ip($ip)
    {
        $this->ip_address = $ip;
        $this->set_coova_session();
    }

    /**
     * [get_mac_address description]
     * @return string $mac_address
     */
    public function get_mac_address()
    {
        return $this->coova_session->mac_address;
    }


    /**
     * is device authenticated
     * @return boolean
     */
    public function is_authenticated()
    {
        return $this->coova_session->authenticated;
    }

    /**
     * [is_throttled description]
     * @return boolean
     */
    public function is_throttled()
    {
        return $this->coova_session->throttled;
    }

}