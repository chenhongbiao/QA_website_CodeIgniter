<?php
class questions_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
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

}