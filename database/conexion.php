<?php 


class Conexion{


private $servidor;
private $nombre;
private $clave;
private $bd;



    function __construct(){

          $this->servidor = "localhost";
           $this->nombre = "root";
           $this->clave = "";
           $this->bd="publicaciones";
   }





       Public function Conectar(){

        $conectar = mysqli_connect($this->servidor,$this->nombre,$this->clave,$this->bd);
        

            return $conectar;
       

 

       }
       



















}


















