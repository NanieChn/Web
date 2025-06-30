<?php
session_start();
$_SESSION['emp'] = $_POST['rech'];
header('location:recherche_emp.php');

?>