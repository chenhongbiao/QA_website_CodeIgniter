<?php
class Ask extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('questions_model');
        $this->load->helper('url_helper');
    }
    
    public function index()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Ask a question';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('label', 'Label', 'required');
    $this->form_validation->set_rules('content', 'Content', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('ask');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->questions_model->add_question();

        $this->load->view('templates/header', $data);
        $this->load->view('questions/add_success');
        $this->load->view('templates/footer'); 
    }
}

}