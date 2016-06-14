<?php
   $this->load->library('session');

    function logged_on()
    {
        return isset($_SESSION['user']);
    }

?>