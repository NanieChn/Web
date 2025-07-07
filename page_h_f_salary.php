<?php 
    include('inc/fonction.php');
    $departe = return_isa_h_f();
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
                <th>emploi</th>
                <th>salaire moyen</th>
              </tr>
            <?php foreach($departe as $departe){ ?>
        <tr>
                <th><?= $departe['isa_femme']; ?></th>
                <th><?= $departe['isa_home']; ?></th>
                <th><?= $departe['title'] ?></th>
                <th><?= return_moyen($departe['title'])['moyen'] ?> $</th>
       
        </tr>
            
        <?php } ?>
        </thead>
        <tbody>
           
        </tbody>
    </table>
    <a href="departements.php" class="btn btn-secondary mb-3">← Retour</a>
</body>
</html>