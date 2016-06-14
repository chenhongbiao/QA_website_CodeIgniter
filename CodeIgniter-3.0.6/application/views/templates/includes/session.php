<?php
   $this->load->library('session');
   //one in the view layer - and one in the controller layer

    function logged_on()
    {
        return isset($_SESSION['user']);
    }

    function is_logged() 
    {
        if (!logged_on())
        {
            header ("Location: signin");
        }
    }

?>