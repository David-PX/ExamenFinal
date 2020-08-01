<?php

require_once "../database/metodosSql.php";
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

$datos = array($titulo, $contenido);

$obj = new MetodosSql();
if ($obj->EditarPublicacion($id, $datos) == 1) {
    header("Location: ../index.php");
} else {
    echo "Fallo al editar";
}
