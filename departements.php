<!-- Collaborate with  andriantsehenoanja926@gmail.com -->
<?php 
    include("inc/fonction.php");
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
                <th>Département</th>
                <th>Manager</th>
            </tr>
            <?php foreach($departe as $departe){ ?>
        <tr>
        <th><a href="employes.php?num=<?= $departe['dept_no']; ?>"><?= $departe['dept_name']; ?></a></th>
       
       <th>  <?php $manager = return_manager_en_cours($departe['dept_no']); 
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
