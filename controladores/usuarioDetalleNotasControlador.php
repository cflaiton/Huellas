<?php
session_start();
$id = $_GET['id'];
//echo "ID o CODIGO recivido = ", $id ;

require ('../modelo/gestionDatos.php');
$datos = new servicioDatos();
$notas = $datos->consultarNotas($id);
/*
echo "<pre>";
echo var_dump($usuario);
echo "</pre>";
*/

$vista = "crud.php";
$subVista ="detalleNotas.php";
require ("../vistas/layout.php");




?>