<?php 
    session_start();
    $_SESSION['scr_emp'] = $_SESSION['scr_emp']+20;
    header('location:employes.php');
    
?>