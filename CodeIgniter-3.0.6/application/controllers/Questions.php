<?php
class Questions extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('questions_model');
        $this->load->model('answers_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['questions'] = $this->questions_model->get_questions();
        $data['title'] = 'Quesetions archive';
        
        $this->load->view('templates/header', $data);
        $this->load->view('questions/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['questions_item'] = $this->questions_model->get_questions($id);
        if (empty($data['questions_item']))
        {
            show_404();
        }
        else
        {
            $data['answers_item'] = $this->answers_model->get_answers($data['questions_item']['id']);
            $data['title'] = $data['questions_item']['title'];
            
            $this->load->view('templates/header', $data);
            $this->load->view('questions/view', $data);
            $this->load->view('templates/footer');
        }

    }
}