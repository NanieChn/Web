<?php 
    session_start();
    $_SESSION['i'] = 0;
    $_SESSION['scr_emp'] = 0;
    header('location:departements.php');
?>