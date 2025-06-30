<?php 
    session_start();
    $_SESSION['i'] = $_SESSION['i']+20;
    header('location:recherche_emp.php');
?>