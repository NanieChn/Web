<?php 
    include('inc/fonction.php');
    echo $_GET['num'];
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
    <br><br><br>
    <h3>pour changer de depatement : completer la formulaire</h3>
    <br><br><br>
<form class="row g-3" action="traite_changement.php" method = "post">
      <div class="col-md-4">
        <label for="validationServer01" class="form-label">Departement</label>
        <input type="text" class="form-control is-valid" id="validationServer01" name="dep" required="">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class = "col-md-4">
        <label for="validationServer01" class="form-label">Date de debut</label>
            <input type="date" class="form-control is-valid" id="validationServer01" name="daty" required="">
            <div class="valid-feedback">
            Looks good!
            </div>
      </div>
      </div>
      <input type="hidden" name="id">
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>  
    
</body>
</html>