<?php

    /**
     * This sets a global path variable to use...which translates to
     * something like /var/www/<base dir>/, which is good enough for us.
     **/
    define('FLEXI_ROOT', getcwd() . "/");
    
    include './includes/header.php';
    session_start(); //this must be on each page the $_SESSION will be set or accessed.
   //echo '<br><br><h4>Am inside the index file BEFORE calling the init my path is set to: '.FLEXI_ROOT.'</h4>';
    require FLEXI_ROOT . "includes/functions.php";
    //echo '<br><br><h4>Am inside the index file AFTER calling the init</h4>';

    $initComplete = flexiInit(); 
    
    if ($initComplete != "COMPLETE" && empty($initComplete)) 
    {
        echo "<h3>Initialization failed...when checking for db... </h3>";
    }else{
      //echo '<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Initialization complete! Your base URL is: ' . $GLOBALS["BASE_URL"] . '</h4>';
        //if (!$GLOBALS["logged_in"] === true) {
        //    header('Location: login.php');
        //}        
        include_once "./includes/main.php";
    }
    include "./includes/footer.php";
?>	
