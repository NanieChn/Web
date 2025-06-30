<?php 
    session_start();
    if($_SESSION['i']==0){
        $_SESSION['i']=0;
    }else{
        $_SESSION['i'] = $_SESSION['i']-20;
    }
    
    header('location:recherche_emp.php');
?>