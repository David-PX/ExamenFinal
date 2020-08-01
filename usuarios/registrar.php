<?php
require_once "../database/metodosSql.php";
require_once "../PHPMailer/Exception.php";
require_once "../PHPMailer/SMTP.php";
require_once "../PHPMailer/PHPMailer.php";
require_once "../correos/Enviar.php";
session_start();

if (isset($_POST['name']) && isset($_POST['apellido']) && isset($_POST['correo']) && isset($_POST['contraseña'])) {

    $m = new MetodosSql();
       
    $imagen = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $activar = array($_POST['name'], $_POST['apellido'], $imagen, $_POST['correo'], $_POST['usuario'], $_POST['contraseña']);
    $_SESSION['activar'] = $activar;

    $e = new Enviar();
    $mensaje = "Saludos " . $_POST['name'] . "" . $_POST['apellido'] . " Gracias por unirte a nuestra comunidad!, copia el siguiente link" . "\n"
        . "http://localhost/Publicaciones/usuarios/activar.php" . "\n" .
        "y pegalo en tu navegador para proceder a activar su cuenta";
   ;
    
!$e->enviarEmail($_POST['correo'], "DDSocialNetwork", $mensaje);
    

   

  header("Location: redireccion.php");
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

  <div class="col-md-10 col-sm-6 col-md-3 center">
<div class="row justify-content-center">

    <form class="form-container" method="post"action="registrar.php" enctype="multipart/form-data">
    <h3 class="text-center">Registrandote</h3>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="apellido">Apellido:</label>
      <input type="text" class="form-control" id="apellido"name="apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="correo">Correo</label>
    <input type="text" class="form-control" id="correo" name="correo">
  </div>
   <div class="form-group">
    <label for="usuario">Nombre de usuario</label>
    <input type="text" class="form-control" id="usuario" name="usuario">
  </div>

  
    <div class="form-group ">
      <label for="contra1">Contraseña</label>
      <input type="password" class="form-control" id="contra1" name="contraseña">
    </div>
    
  
   <div class="form-group">
    <label for="foto">Elegir foto de perfil...</label>
    <input type="file" class="form-control" id="foto" name="foto" >
  </div>



  <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
</form>

  </div>
</div>
</section>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
