<?php
session_start();
$_SESSION['departe'] = $_GET['num'];
echo $_SESSION['departe'];
header('location:employes.php');

?>