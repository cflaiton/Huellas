<?php

session_start();

$id = $_GET['id'];
//echo "ID o CODIGO recivido = ", $id ;

require ('../modelo/gestionDatos.php');
$datos = new servicioDatos();
$notas = $datos->consultarNotas($id);



foreach ($notas  as $u) {
    $id = $u['id'];
    $nombre = $u['nombreE'];
    $correo = $u['correoE'];
    $nota1 = $u['nota1'];
    $nota2 = $u['nota2'];
    $nota3 = $u['nota3'];
}



/*
echo "<pre>";
echo var_dump($usuario);
echo "</pre>";
*/

$vista = "crud.php";
$subVista ="formularioEditarNotas.php";
require ("../vistas/layout.php");




?>