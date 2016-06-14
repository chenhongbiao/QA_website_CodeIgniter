<?php
class users_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function add_user()
{
    $this->load->helper('url');

    $data = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'email' => $this->input->post('email')
     );

     return $this->db->insert('users', $data);
}

}