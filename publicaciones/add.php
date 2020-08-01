<?php

require_once "../database/metodosSql.php";
$id = $_POST['id'];
$datos = array($id, $_POST['titulo'], $_POST['publicacion']);

$obj = new MetodosSql();

if ($obj->GuardarPublicacion($datos[0], $datos[1], $datos[2]) == 1) {
    header("Location: ../index.php");
} else {
    echo "Fallo al agregar";
    var_dump($datos);

}
