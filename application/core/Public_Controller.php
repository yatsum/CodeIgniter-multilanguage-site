<?php

class Public_Controller extends MY_Controller
{
    protected $connection_status;

    protected $device;

    public function __construct()
    {
        parent::__construct();

        $language = $this->data['current_lang'];
        $idiom = $language['language_directory'];
        
        $this->load->language('interface_lang', $idiom);
        
        $this->load->model('status_model');
        $this->load->model('device_model');

        $this->connection_status = $this->connection_status();
        $this->device = $this->device_model;

    }

    protected function render($the_view = null, $template = 'public_master')
    {
        $this->load->library('menus');
        $this->data['top_menu'] = $this->menus->get_menu('top-menu', $this->current_lang, 'bootstrap_menu');
        $this->data['connection_status'] = $this->connection_status;
        parent::render($the_view, $template);
    }

    protected function connection_status()
    {

        return $this->status_model->get_connection_status();

    }
}
