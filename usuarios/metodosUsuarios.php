<?php 
include '../database/conexion.php';

class metodosUsuarios 
{

public function obtenerUsuario($nombre_usuario,$contra){


       $c = new Conexion();
       $conexion = $c->Conectar();      
       $sql = "SELECT * FROM usuarios 
       WHERE nombre_usuario ='$nombre_usuario' AND contraseña = '$contra'  ";
       $result = $conexion->query($sql);
       $filas = $result->num_rows;
       if($filas == 1){
           return true;
       }else{
           return false;
       }



}
    




}





















