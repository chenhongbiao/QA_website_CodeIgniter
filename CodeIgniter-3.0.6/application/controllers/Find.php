<?php
class Find extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('questions_model');
        $this->load->library('session');
    }
    
    public function index()
{
        $data['questions'] = $this->questions_model->find_questions($_SESSION['user']['label']);
        $data['title'] = 'Welcome to Your Find.';
        
        $this->load->view('templates/header', $data);
        $this->load->view('find', $data);
        $this->load->view('templates/footer');
}

}