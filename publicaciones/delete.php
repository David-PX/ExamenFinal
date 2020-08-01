<?php
require_once "../database/metodosSql.php";
$id = $_GET['id'];

$m = new MetodosSql();
if ($m->EliminarPublicacion($id) == 1) {
    header('Location: ../index.php');
} else {
    echo 'fallo al eliminar';
}
