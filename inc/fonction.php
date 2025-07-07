<?php 
    include("connection.php");
    function return_departement(){
        $sql = "SELECT * FROM `departments` order by dept_no";
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
    function return_departement_employe($departe,$affichage){
        $sql = "SELECT * FROM `dept_emp` where dept_no = '$departe'limit $affichage,20";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $tab = [];
        while($valiny=mysqli_fetch_assoc($sql1)){
            $tab [] =$valiny;
        }
        return $tab;
    }

    function return_fiche_employee($id_emp){
        $sql = "SELECT * FROM titles where emp_no = '$id_emp'";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $tab = [];
        while($valiny=mysqli_fetch_assoc($sql1)){
            $tab [] =$valiny;
        }
        return $tab;
    }
    function return_departement_employe_iray($id_emp){
        $sql = "SELECT * FROM `dept_emp` join departments on emp_no = '$id_emp' and departments.dept_no = dept_emp.dept_no";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $valiny=mysqli_fetch_assoc($sql1);
        return $valiny;

    }
    function return_fiche_salaire($id_emp){
        $sql = "SELECT * FROM salaries where emp_no = '$id_emp'";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $tab = [];
        while($valiny=mysqli_fetch_assoc($sql1)){
            $tab [] =$valiny;
        }
        return $tab;
    }
    function return_plus_long_emploi(){
        $sql = "SELECT max(moyen) m,dept_no,dept_name FROM v_moyen_age_emploi";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $valiny=mysqli_fetch_assoc($sql1);
        return $valiny;
    }
    function recherche_departement($rech,$affichage){
        $sql = "SELECT * FROM departments WHERE dept_name like '%$rech%' or dept_name like '$rech%' limit $affichage,20";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $tab = [];
    if(mysqli_num_rows($sql1)>0){
        while($valiny=mysqli_fetch_assoc($sql1)){
            $tab [] =$valiny;
        }
    }
        return $tab;
    }
    function recherche_employe($rech,$affichage){
        $sql = "SELECT * FROM employees WHERE first_name like '%$rech%' or first_name like '$rech%' or last_name like '%$rech%' or last_name like '$rech%' limit $affichage,20";
        echo $sql;
        $sql1 = mysqli_query(dbconnect(),$sql);
        $tab = [];
    if(mysqli_num_rows($sql1)>0){
        while($valiny=mysqli_fetch_assoc($sql1)){
            $tab [] =$valiny;
        }
    }
        return $tab;
    }
    function recherche_employe_par_age($min,$max,$affichage){
        $sql = "SELECT * FROM employees WHERE DATEDIFF(NOW(),birth_date)/365 > $min and DATEDIFF(NOW(),birth_date)/365 < $max limit $affichage,20";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $tab = [];
    if(mysqli_num_rows($sql1)>0){
        while($valiny=mysqli_fetch_assoc($sql1)){
            $tab [] =$valiny;
        }
    }
        return $tab;
    }
    function recherche_departemen_nbr_employe($d00i){
        $sql="SELECT count(emp_no) isa FROM dept_emp where dept_no = '$d00i'";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $valiny=mysqli_fetch_assoc($sql1);
        return $valiny;
    }

    function return_isa_h_f($d00i){
        $sql="SELECT * FROM v_isa_femme_homme where dept_no = '$d00i'";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $valiny=mysqli_fetch_assoc($sql1);
        return $valiny;
    }

    function return_moyen($d00i){
        $sql="SELECT avg(salary) moyen,dept_no from v_salaire_empl where dept_no = '$d00i';";
        $sql1 = mysqli_query(dbconnect(),$sql);
        $valiny=mysqli_fetch_assoc($sql1);
        return $valiny;
    }



?> 