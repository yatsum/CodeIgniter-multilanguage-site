<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Check with cloud server for a token
     * @param  string $token
     * @return mixed Json data of token attribute, or boolean
     */
    public function validate_token($token)
    {
        //mocking
        sleep(2);
        if (! $token) {
            return false;
        }

        if ($token == '123456abcdef') {
            return 'success';
        } else {
            return false;
        }

    }

    /**
     * Return the server status on different situation includes:
     *  not ready (parking), no internet, restrict zone, landing
     * @return string $status;
     */
    public function get_connection_status()
    {
        //mocking
        //
        usleep(250000);
        //return '504';
        //return '501';
        return '200';


    }

    /**
     * Query coova server API to return MAC address of device
     * @param  string $ip  
     * @return string $mac_address
     */
    public function get_device_mac_address_by_ip($ip)
    {
        if (! $ip) {
            return '';
        }

        //mocking
        usleep(200000);
        return  'EC-FF-B5-00-41-71';

    }
}