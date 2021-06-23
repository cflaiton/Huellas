<?php
session_start();
require '../modelo/gestionDatos.php';


$datos = new servicioDatos();
$listaUsuarios = $datos->obtenerNotas();


$vista = "listarNotas.php";
require "../vistas/layout.php"

?>