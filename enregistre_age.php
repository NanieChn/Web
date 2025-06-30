<?php 
session_start();

    $_SESSION['min'] = $_POST['min'];
    $_SESSION['max'] = $_POST['max'];
    header('location:reche_par_age.php');
?>