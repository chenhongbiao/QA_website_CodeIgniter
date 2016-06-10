<?php
class answers_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_answers($id = FALSE)
    {
        if($id != FALSE)
        {
            $query = $this->db->get_where('answers', array('questionId' => $id));
            return $query->result_array();            
        }
    }

    public function add_answer()
{
    $data = array(
        'authorId' => 2,
        'questionId'=>2,
        'content' => $this->input->post('content')
     );

     return $this->db->insert('answers', $data);
}

}