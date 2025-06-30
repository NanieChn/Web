<?php 
    session_start();
    if($_SESSION['scr_emp']==0){
        $_SESSION['scr_emp']=0;
    }else{
        $_SESSION['scr_emp'] = $_SESSION['scr_emp']-20;
    }
    
    header('location:employes.php');
?>