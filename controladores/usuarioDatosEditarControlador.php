<?php
//session_start();
if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
    header("Location: vistas/login.php");
}

$id = $_GET['id'];
//echo "ID o CODIGO recivido = ", $id ;

require ('../modelo/gestionDatos.php');
$datos = new servicioDatos();
$usuario = $datos->consultarUsuario($id);



foreach ($usuario  as $u) {
    $codigo = $u['codigo'];
    $nombre = $u['nombre'];
    $correo = $u['correo'];
    $contrasena = $u['contrasena'];
    $rol = $u['rol'];
}





/*
echo "<pre>";
echo var_dump($usuario);
echo "</pre>";
*/

$vista = "crud.php";
$subVista ="formularioEditarUsuario.php";
require ("../vistas/layout.php");




?>