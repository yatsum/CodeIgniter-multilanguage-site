<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Device_model extends MY_Model
{

    protected $mac_address;
    protected $ip_address;

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
        $this->mac_address = $this->get_device_mac_address_by_ip($this->ip_address);

    }
    
    public function get_device_ip()
    {
        //should get $this->input->ip_address();
        return '192.168.10.50';

    }

    /**
     * [get_mac_address_by_ip description]
     * @param  string $ip  Address
     * @return string $mac_address;
     */
    public function get_device_mac_address_by_ip($ip)
    {

        return $this->api_model->get_device_mac_address_by_ip($ip);
    }

}