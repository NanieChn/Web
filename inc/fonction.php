<?php 
    include("connection.php");
    function return_departement(){
        $sql = "SELECT * FROM `departments`";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $tab = [];
        while($valiny=mysqli_fetch_assoc($sql1)){
            $tab [] =$valiny;
        }
        return $tab;
    }
    function return_manager_en_cours($departe){
        $sql = "SELECT * FROM `dept_manager` where dept_no = '$departe' and NOW()>=from_date and NOW()<=to_date ";
        $sql1 = mysqli_query(dbconnect(),$sql);
        // echo($sql);
        $tab = [];
        if(mysqli_num_rows($sql1)>0){
            while($valiny=mysqli_fetch_assoc($sql1)){
                $tab [] =$valiny;
            }
        }
        
        return $tab;
    }
    function return_employees($id_emp){
        $sql = "SELECT * FROM `employees` where emp_no =$id_emp";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $valiny=mysqli_fetch_assoc($sql1);
        return $valiny;
    }
    function return_departement_iray($id_dept){
        $sql = "SELECT * FROM `departments` where dept_no ='$id_dept'";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $valiny=mysqli_fetch_assoc($sql1);
        return $valiny;
    }
    // 
    function return_departement_employe($departe){
        $sql = "SELECT * FROM `dept_emp` where dept_no = '$departe'";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $tab = [];
        while($valiny=mysqli_fetch_assoc($sql1)){
            $tab [] =$valiny;
        }
        return $tab;
    }


?> 