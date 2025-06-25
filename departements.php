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
<article class="my-3" id="validation">
  <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
    <h3>Recherche</h3>
  </div>

  <div>
    <div class="bd-example">
    <form class="row g-3">
      <div class="col-md-4">
        <label for="validationServer01" class="form-label">Departement</label>
        <input type="text" class="form-control is-valid" id="validationServer01" value="Customer Service" required="">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationServer02" class="form-label">Name</label>
        <input type="text" class="form-control is-valid" id="validationServer02" value="Jean" required="">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationServerUsername" class="form-label">Age</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required="">
          <div class="invalid-feedback">
            Please choose a number.
          </div>
        </div>
      </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
    </div>
  </div>
</article>

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
