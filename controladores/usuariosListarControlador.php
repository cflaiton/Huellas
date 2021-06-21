<?php
session_start();
require '../modelo/gestionDatos.php';

$datos = new servicioDatos();

$listaUsuarios = $datos->obtenerUsuarios();


$vista = "listarUsuarios.php";
require "../vistas/layout.php"

?>