<?php

class Admin_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('postal');
        $this->load->helper('url');
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            redirect('admin/user/login', 'refresh');
        }
        $current_user = $this->ion_auth->user()->row();
        $this->user_id = $current_user->id;
        $this->data['current_user'] = $current_user;
        $this->data['current_user_menu'] = '';
        if ($this->ion_auth->in_group('admin')) {
            $this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', null, true);
        }

        $this->data['page_title'] = 'CI App - Dashboard';
    }
    protected function render($the_view = null, $template = 'admin_master')
    {
        parent::render($the_view, $template);
    }
}
