<?php 
    include('inc/fonction.php');
    $departe = return_departement();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Départements</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <h1 class="mb-4">Liste des Départements</h1>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>nombre femme</th>
                <th>nombre homme</th>
                <th>Departement</th>
                <th>numero depatement</th>
                <th>salaire moyen</th>
              </tr>
            <?php foreach($departe as $departe){ ?>
        <tr>
                <th><?= return_isa_h_f($departe['dept_no'])['isa_femme']; ?></th>
                <th><?= return_isa_h_f($departe['dept_no'])['isa_home']; ?></th>
       
                <th> <?= $departe['dept_name'] ?></th>
                <th><?= $departe['dept_no']  ?></th>
                <th><?= return_moyen($departe['dept_no'])['moyen'] ?></th>
        </tr>
            
        <?php } ?>
        </thead>
        <tbody>
           
        </tbody>
    </table>
    <a href="departements.php" class="btn btn-secondary mb-3">← Retour</a>
</body>
</html>