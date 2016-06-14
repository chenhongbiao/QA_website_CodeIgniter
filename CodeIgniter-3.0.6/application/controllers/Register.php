<?php
class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper('url_helper');
    }
    
    public function index()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Register Now!';

    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('register');
        $this->load->view('templates/footer');
    }
    else
    {
        $this->users_model->add_user();

        $this->load->view('templates/header', $data);
        $this->load->view('register_success');
        $this->load->view('templates/footer'); 
    }
}

}