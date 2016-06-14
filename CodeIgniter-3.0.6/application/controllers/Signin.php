<?php
class Signin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }
    
    public function index()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Signin Now!';

    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('signin');
        $this->load->view('templates/footer');
    }
    else
    {
        $data['user']  = $this->users_model->get_user($this->input->post('username'), $this->input->post('password'));
        if(!empty($data['user'])){

            $_SESSION['user'] =$data['user'];
            $_SESSION['username'] =$data['user']['username'];
            $_SESSION['password'] =$data['user']['username'];     
            
            header ("Location: questions");
        }
        else{
             $data['title'] = 'Wrong Username or Password';
             $this->load->view('templates/header', $data);
             $this->load->view('signin');
             $this->load->view('templates/footer');
        }
    }

}

}