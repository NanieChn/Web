<?php 
include('inc/fonction.php');
session_start();

$rech = $_POST['rech'];
echo $rech;
$recherche = recherche_departement($rech,$_SESSION['i']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>resultats de recherche</h1>
<a href="traite_dep.php" class="btn btn-secondary mb-3">← Retour</a>
<table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Département</th>
                <th>Manager</th>
            </tr>
            <?php foreach($recherche as $recherche){ ?>
        <tr>
        <th><a href="employes.php?num=<?= $recherche['dept_no']; ?>"><?= $recherche['dept_name']; ?></a></th>
       
       <th>  <?php $manager = return_manager_en_cours($recherche['dept_no']); 
            foreach($manager as $manager){?>
            <p><?php $employer = return_employees($manager['emp_no']); 
            echo $employer['first_name']," ", $employer['last_name'] ; ?></p>
            <?php } ?>  </th>
        </tr>
            
        <?php } ?>
        </thead>
        <tbody>
           
        </tbody>
    </table>
</body>
</html>