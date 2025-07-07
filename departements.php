<!-- Collaborate with  andriantsehenoanja926@gmail.com -->
<?php 
    include("inc/fonction.php");
    session_start();

    $departe = return_departement();
    $_SESSION['i'] = 0;
    $_SESSION['scr_emp'] = 0;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Départements</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<a href="page_h_f_salary.php" class="btn btn-secondary mb-3">homme femme comparer par nombre</a>

<article class="my-3" id="validation">
  <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
    <h3>Recherche</h3>
  </div>

  <div>

    <form class="row g-3" action="departement_rech.php" method = "post">
      <div class="col-md-4">
        <label for="validationServer01" class="form-label">Departement</label>
        <input type="text" class="form-control is-valid" id="validationServer01" name="rech" required="">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>  


    <form action="enregistre_emp_rec.php" method="post" >
      <div class="col-md-4">
        <label for="validationServer02" class="form-label">Name employe</label>
        <input type="text" class="form-control is-valid" id="validationServer02" name="rech" required="">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>


    <form action="reche_par_age.php" method = "post">
      <div class="col-md-4">
        <div>
            <label for="validationServerUsername" class="form-label">Age min</label>
              <div class="input-group has-validation">
               <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required="" name="min">
              <div class="invalid-feedback">
            Please choose a number.
              </div>
            </div>
        </div>
        <div>
            <label for="validationServerUsername" class="form-label">Age max</label>
              <div class="input-group has-validation">
               <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" required="" name="max">
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
                <th>numero</th>
                <th>Département</th>
                <th>Manager</th>
                <th>nombre employees</th>
              </tr>
            <?php foreach($departe as $departe){ ?>
        <tr>
          <th><?= $departe['dept_no']; ?></th>
        <th><a href="employes_traite.php?num=<?= $departe['dept_no']; ?>"><?= $departe['dept_name']; ?></a></th>
       
       <th>  <?php $manager = return_manager_en_cours($departe['dept_no']); 
            foreach($manager as $manager){?>
            <p><?php $employer = return_employees($manager['emp_no']); 
            echo $employer['first_name']," ", $employer['last_name'] ; ?></p>
            <?php } ?>  </th>
            <th><?=  recherche_departemen_nbr_employe($departe['dept_no'])['isa']; ?></th>
        </tr>
            
        <?php } ?>
        </thead>
        <tbody>
           
        </tbody>
    </table>
</body>
</html>
