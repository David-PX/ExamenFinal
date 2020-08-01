<?php
session_start();

if (isset($_SESSION['usuarios'])) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/login.css" type="text/css">
    <script src="https://kit.fontawesome.com/c805912686.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<title>Inicio de sesion.</title>
</head>
<body>

<section class="container-fluid fadeInDown">
      <div class="row justify-content-center">
       <div class="col-12 col-sm-6 col-md-3 center">



      <form class="form-container" method="post" action="usuarios/usuarios.php">
          <h3 class="text-center">Inicio de sesión.</h3>
  <div class="form-group inputWithIcon">
    <label for="exampleInputEmail1">Nombre de usuario</label>
    <input type="text" class="form-control txt" id="usuario" aria-describedby="emailHelp"placeholder="Digite su usuario" name="txtUsuario" required>
    <i class="fas fa-user"></i>
  </div>
  <div class="form-group inputWithIcon">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control txt" id="exampleInputPassword1" placeholder="Digite su contraseña" name="txtContra" required>
    <i class="fas fa-lock"></i>

  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Mostrar contraseña</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Iniciar sesion.</button>
  <a class="btn btn-link btn-block" href="usuarios/registrar.php"><i class="fas fa-user-plus"></i> Registrarse</a>
</form>


      </div>

      </div>






</section>









    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
