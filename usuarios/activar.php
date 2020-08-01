<?php 
require_once "../database/metodosSql.php";
session_start();


if(isset($_POST['submit'])){
    $m = new MetodosSql();
$datos = $_SESSION['activar'];

 if ($m->GuardarUsuarios($datos) == 1) {
     echo "<div class='alert alert-primary' role='alert'>
 Tu registro ha sido un exito...  <a href='../login.php' class='alert-link'>Volver al login</a>. 
</div>";
       
    } else {
        echo 'Fallo al agregar';
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../assets/css/registrar.css" type="text/css">
    <script src="https://kit.fontawesome.com/c805912686.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Registrar usuario</title>
</head>
<body>
  <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">

  <section class="container-fluid fadeInDown">
<div class="card text-center">
  
  <div class="card-body">
    <form action="activar.php"method="post">
    <button type="submit" name="submit" class="btn btn-primary btnRegistrar"><strong>Presiona aqui para activar tu cuenta!</strong> </button>
    </form>
  </div>
 
</div>
  
</section>
</div>
 <div class="col-md-3"></div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
