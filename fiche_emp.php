<?php 
    include('inc/fonction.php');
    session_start();

    $id_emp = $_GET['num'];
    $employee = return_employees($id_emp);
    $fiche = return_fiche_employee($id_emp);
    $departe = return_departement_employe_iray($id_emp);
    $salaire = return_fiche_salaire($id_emp);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Employés du département</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
<h1>le temps le plus long :<?= return_long_temp_empt($id_emp)['max'] ?> ans </h1>
    <h1 class="mb-4">fiche de <?= $employee['first_name']; ?></h1>
    <a href="changer_dept.php?num=<?= $id_emp ?>" class="btn btn-secondary mb-3">changer departement</a>
    
    <a href="employes.php?num=<?= $departe['dept_no']; ?>" class="btn btn-secondary mb-3">← Retour</a>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>nom</th>
                <th>prenom</th>
                <th>sexe</th>
                <th>employe</th>
                <th>titre</th>
            </tr>
            
               
        </thead>
        <tbody>
        <tr>
                <th><?= $employee['first_name']; ?></th>
                <th><?= $employee['last_name']; ?></th>
                <th><?= $employee['gender'] ?></th>
                <th><?= $departe['dept_name']; ?></th>
                <th><?php foreach($fiche as $fiche){ ?><?= $fiche['title']; ?> <?php } ?></th>
                
            </tr> 
        </tbody>
    </table>
    <h2 class="mb-3">see salaires</h2>
    <table class="table table-bordered">
        <thead class="table-light">
        <tr>
            <th>from date</th>
            <th>to date</th>
            <th> salaires </th>
        </tr>
        </thead>
        
        <tbody>
            <?php foreach($salaire as $salaire){ ?>
                <tr>
                <th><?= $salaire['from_date'] ?></th>
                <th><?= $salaire['to_date'] ?> </th>
                <th><?= $salaire['salary'] ?></th>
                </tr>
                
                <?php } ?> 
        </tbody>
   
    </table>
</body>
</html>
