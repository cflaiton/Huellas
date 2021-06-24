<?php

//session_start();

if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
    header("Location: vistas/login.php");
}
require '../modelo/gestionDatos.php';

$codigo=$_POST['codigo'];


$datos = new servicioDatos();

$borrar = $datos->borrarUsuario($codigo);

$listar = new servicioDatos();
$listaUsuarios = $listar->obtenerUsuarios();

$subVista = "listarUsuarios.php";
$vista = "crud.php";
require "../vistas/layout.php"

?>