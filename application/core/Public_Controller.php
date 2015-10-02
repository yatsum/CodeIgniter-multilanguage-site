<?php

class Public_Controller extends MY_Controller
{
    protected $connection_status;

    protected $device;

    protected $language;

    public function __construct()
    {
        parent::__construct();

        $this->load->model('status_model');
        $this->connection_status = $this->connection_status();

        $this->load->model('device_model');
        
        $this->device = $this->device_model;

        $this->language = $this->session->language;
        
        $this->force_select_language();

    }

    /**
     * Render view by using template param as layout
     * @param  string $the_view
     * @param  string $template
     * @return void
     */
    protected function render($the_view = null, $template = 'public_master')
    {
        $this->data['connection_status'] = $this->connection_status;
        parent::render($the_view, $template);
    }

    /**
     * Retrieve current server connection status
     * @return string Server connection status code
     */
    protected function connection_status()
    {

        return $this->status_model->get_connection_status();

    }

    /**
     * Get the language file physical folder
     * @return string Folder name
     */
    protected function get_language_folder()
    {
        $languages_available = $this->config->item('languages_available');
        $language_folder =  $languages_available[$this->language]['language_folder'];
        return $language_folder;
    }

    /**
     * Check if no language selected, redirect to
     * language selection page
     *
     * Except for language routes
     *
     * @return void
     */
    protected function force_select_language()
    {
        //except language route
        if ($this->router->fetch_class() == 'language') {
            return;
        }

        if (! isset($this->language) || $this->language == '') {
            redirect('language');
        }
    }
}
