<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model
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
        //return '504';
        //return '501';
       return '200';


    }

    /**
     * [get_coova_session_by_ip description]
     * @param  string $ip 
     * @return string json data
     */
    public function get_coova_session_by_ip($ip)
    {
        //mocking, should call coova to query data
        $array['mac_address'] = 'EC-FF-B5-00-41-71';
        $array['ip_address'] = $ip;
        $array['authenticated'] = true;
        $array['throttled'] = true;

        return json_encode($array);
    }

}