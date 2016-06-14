<?php
class questions_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    public function get_questions($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('questions');
            return $query->result_array();
        }
        else
        {
            $query = $this->db->get_where('questions', array('id' => $id));
            return $query->row_array();            
        }
    }

    public function add_question()
{
    $this->load->helper('url');

    $data = array(
        'authorId' => $_SESSION['user']['id'],
        'title' => $this->input->post('title'),
        'label' => $this->input->post('label'),
        'content' => $this->input->post('content')
     );

     return $this->db->insert('questions', $data);
}

public function find_questions($label = FALSE)
    {
            $query = $this->db->get_where('questions', array('label' => $label));
            return $query->result_array();            
    }

}