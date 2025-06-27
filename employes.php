<?php 
    include("inc/fonction.php");
    $departe = $_GET['num'];
    $tous_employe = return_departement_employe($departe);
    $dep = return_departement_iray($departe);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Employés du département</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <h1 class="mb-4">Employés du département : <?= $dep['dept_name'] ?></h1>
    <a href="departements.php" class="btn btn-secondary mb-3">← Retour</a>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
            </tr>
            <?php foreach($tous_employe as $tous_employe){ ?>
            <tr><?php $employe = return_employees($tous_employe['emp_no']); ?>
            <th><a href="fiche_emp.php?num=<?= $employe['emp_no'] ;?>"><?= $employe['first_name'] ;?></a></th>
                <th><?=  $employe['last_name'] ; ?></th>
            </tr>    
            <?php } ?>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</body>
</html>
