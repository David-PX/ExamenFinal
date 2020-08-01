<?php 
include 'metodosUsuarios.php';



  
    if(isset($_POST['txtUsuario']) && isset($_POST['txtContra'])){
    $nombreUsuario = $_POST['txtUsuario'];
    $contraseña = $_POST['txtContra'];


           
       $m = new metodosUsuarios();

       if( $m->obtenerUsuario($nombreUsuario,$contraseña)){
 
        session_start();
        $_SESSION['usuarios'] = $nombreUsuario;
        header('Location: ../index.php');


       }else{
           
           echo ' Usuario no existe';
           
          
       }



    }
   























