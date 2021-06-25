<?php

session_start();
if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
    header("Location: vistas/login.php");
}


require '../modelo/gestionDatos.php';


if( (isset($_POST['codigo'])) && (empty($_POST['codigo'])) &&
    (isset($_POST['nombre'])) && (!empty($_POST['nombre'])) && 
    (isset($_POST['correo'])) && (!empty($_POST['correo'])) &&
    (isset($_POST['contrasena'])) && (!empty($_POST['contrasena'])) &&
    (isset($_POST['rol'])) && (!empty($_POST['rol'])) )  {

        $cod=$_POST['codigo'];
        $nom=$_POST['nombre'];
        $cor=$_POST['correo'];
        $con=$_POST['contrasena'];
        $rol=$_POST['rol'];

        $datos = new servicioDatos();
        $validar = $datos->validarCodigo($cod);

        if (!$validar) { 
            $inserarUsuario = $datos->crearUsuario($cod,$nom,$cor,$con,$rol);
               if ($inserarUsuario) {
                  $listar = new servicioDatos();
                   $listaUsuarios = $listar->obtenerUsuarios();
                   $subVista = "listarUsuarios.php";
                   } else {
                       $subVista = "formularioCrearUsuario.php";
                }
         } 
         else {
                $ErrorCodigo = "El codigo ya ".$cod." existe";
                $subVista = "formularioCrearUsuario.php"; 
        }
    }else {
        $subVista = "formularioCrearUsuario.php";       
    }

    $vista = "crud.php";
    require "../vistas/layout.php"

?>