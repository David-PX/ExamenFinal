
<?php
require_once "../database/metodosSql.php";
session_start();

if (isset($_POST['cerrarSesion'])) {
    unset($_SESSION['usuarios']);
    header('Location: ../login.php');
}

$usuario = $_SESSION['usuarios'];

$m = new MetodosSql();
$datosUsuario = $m->MostarDatosUsuarios($usuario);
$datosPublicaciones = $m->MostarTodas();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/c805912686.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Principal</title>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark transparent ">
  <a class="navbar-brand" href="#"></a>
  <?php foreach ($datosUsuario as $data): ?>
   <div class="row perfil">
  <img src="data:image/JPG;base64,<?php echo base64_encode($data['foto_perfil']); ?>" alt="Foto de perfil" class="imagenRedonda" widht="50px">
  <p class="text-light"><strong> <?php echo $data['nombre_usuario'] ?></strong> </p>
  </div>
<?php endforeach;?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link left" href="../index.php"><i class="fas fa-home"></i><strong> Inicio </strong></a>
      </li>
      <?php if (isset($_SESSION['usuarios'])) {?>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-user-circle"></i><strong> Cuentas</strong>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <form action="" method="post">
          <button class="dropdown-item" name="cerrarSesion">Cerrar Sesion.</button>
          </form>

      </li>
      <?php } else {
    header('Location: ../login.php');
}?>
      <li class="nav-item">
        <a data-target="#myModa" data-toggle="modal" class="nav-link left" ><i class="fas fa-question-circle"></i><strong> Ayuda</strong></a>
      </li>
      <li class="nav-item active">
        <a href="#" class="nav-link left"><i class="fas fa-blog"></i><strong> Publicaciones</strong></a>
      </li>

    </ul>
  </div>
</nav>




<div class="main ">

<?php foreach ($datosPublicaciones as $datos): ?>
<div class="row">
<div class="col-md-3"></div>

<div class="col-md-6 publica">
<div class="card text-center ">
 
  <div class="card-body">
     
      <img class="float-left imagen"src="data:image/JPG;base64,<?php echo base64_encode($datos['foto_perfil']); ?>" alt="">
     
      
    <h5 class="card-title"><?php echo $datos['titulo']; ?></h5>

    <p><?php echo $datos['contenido']; ?></p>

  </div>
  <div class="card-footer text-muted">
    <div class="float-left"> <?php echo $datos['nombre_usuario']; ?> </div>
    <div class="float-right">

     <?php echo $datos['fecha_publicacion']; ?>

    </div>
  </div>
</div>

</div>
<div class="col-md-3"></div>
</div>
<?php endforeach;?>








</div><!--main-cierre-->


<!-- modal ayuda -->
<div id="myModa" class="modal fade" role="modal">
  <div class="modal-dialog modal-dialog-centered">


 <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title text-right">Ayuda</h4>
        <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span>
       
      </div>
      <div class="modal-body">
        <p>Aqui vemos todas las publicaciones de todos los usuarios ordenadas por las fechas mas recientes</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<!-- final modal ayuda publicacion -->







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>