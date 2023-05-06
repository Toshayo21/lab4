<?php

$site_name = htmlentities($_GET['page'] ?? null, ENT_QUOTES);
switch ($site_name) {
    case 'services':
    case 'contacts':
    case 'about_us':
        require 'header.php';
        require "$site_name.php";
        require 'footer.php';
        break;
    case 'sign_up':
        require "$site_name.php";
        break;
    default:
        require 'header.php';
        require "landing.php";
        require 'footer.php';
        break;
}
