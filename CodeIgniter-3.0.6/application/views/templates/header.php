<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
require_once ("includes/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link href="<?=base_url()?>/application/views/css/general.css" rel="stylesheet" type="text/css" >
    <link href="<?=base_url()?>/application/views/css/pure-release-0.6.0/pure-min.css" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<body>

<div id="header-container">

<div class="header">
        <div class="pure-menu pure-menu-horizontal">
            <a class="pure-menu-heading" href="<?php echo site_url('questions'); ?>">ESL Site</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item pure-menu-selected"><a href="<?php echo site_url('questions'); ?>" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="<?php echo site_url('find'); ?>" class="pure-menu-link">Find</a></li>
                <li class="pure-menu-item"><a href="<?php echo site_url('blog'); ?>" class="pure-menu-link">Blog</a></li>

                <?php

                     if ( logged_on())
                     {
                         echo "<li class='pure-menu-item'><a href='";
                         echo site_url('signout');
                         echo "' class='pure-menu-link'>Sign out</a></li>";
                     }
                     else
                     {
                         echo "<li class='pure-menu-item'><a href='";
                         echo site_url('signin');
                         echo "' class='pure-menu-link'>Sign in</a></li>";
                         
                         echo "<li class='pure-menu-item'><a href='";
                         echo site_url('register');
                         echo "' class='pure-menu-link'>Register</a></li>";
                     }
                    
                 ?>
            </ul>

        </div>
    </div>

</div>

<div id="container">