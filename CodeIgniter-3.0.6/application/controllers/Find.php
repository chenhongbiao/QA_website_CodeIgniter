<?php
class Find extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('session');
    }
    
    public function index()
{
        $data['title'] = 'Welcome Your Find.';

        $this->load->view('templates/header', $data);
        $this->load->view('find');
        $this->load->view('templates/footer');
}

}