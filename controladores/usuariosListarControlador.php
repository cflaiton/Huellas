<?php
session_start();
if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
    header("Location: vistas/login.php");
}
require '../modelo/gestionDatos.php';

$datos = new servicioDatos();

$listaUsuarios = $datos->obtenerUsuarios();


$vista = "listarUsuarios.php";
require "../vistas/layout.php"

?>