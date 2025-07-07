<?php 
    include('inc/fonction.php');
    $get_id = $_POST['id'];
    $d00i = prendre_dept($_POST['dep']);
    $date = $_POST['daty'];
    echo $d00i['dept_no'];

    ajout_emp_de_departement($d00i['dept_no'],$date);
    changer_de_departement($get_id);

?>