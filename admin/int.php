<?php
    include 'connection.php';
    $tmp= 'includes/temp/';  //Template Directory 
    $css= 'layout/css/'; //Css Directory
    $js= 'layout/javascript/'; //JavaScript Directory    
    $lang= 'includes/lang/'; //languge Directory

    include $lang."en.php";
    include $tmp . 'header.php';
    if(!isset($navBar)){
        include $tmp.'navbar.php';
    }
    include $tmp . 'footer.php';
