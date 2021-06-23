<?php

session_start();
require '../modelo/gestionDatos.php';

$id=$_POST['id'];


$datos = new servicioDatos();
$borrar = $datos->borrarNotas($id);

$listar = new servicioDatos();
$listaUsuarios = $listar->obtenerNotas();

$subVista = "listarNotas.php";
$vista = "crud.php";
require "../vistas/layout.php"

?>