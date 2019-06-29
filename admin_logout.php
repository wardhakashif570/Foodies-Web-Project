<?php 
    session_start();
    //session_destroy();
    unset($_SESSION['admin_email']);
    header("location: admin_login.php");
?>