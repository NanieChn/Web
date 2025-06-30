<?php 
    include("inc/fonction.php");
    session_start();
    echo $_SESSION['emp'];
    $recherche = recherche_employe($_SESSION['emp'],$_SESSION['i']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Employés du département</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
<a href="traite_prec.php" class="btn btn-secondary mb-3">← precedent</a>
<a href="traite_suiv.php" class="btn btn-secondary mb-3">← suivant</a>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
            </tr>
            <?php foreach($recherche as $recherche){ ?>
            <tr><?php $employe = return_employees($recherche['emp_no']); ?>
            <th><a href="fiche_emp.php?num=<?= $employe['emp_no'] ;?>"><?= $employe['first_name'] ;?></a></th>
                <th><?=  $employe['last_name'] ; ?></th>
            </tr>    
            <?php } ?>
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <a href="traite_dep.php" class="btn btn-secondary mb-3">← Retour</a>
</body>
</html>
