<?php

session_start();
if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
    header("Location: vistas/login.php");
}
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