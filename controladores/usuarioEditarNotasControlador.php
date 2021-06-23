<?php

session_start();
require '../modelo/gestionDatos.php';


if( (isset($_POST['id'])) && (!empty($_POST['id'])) &&
    (isset($_POST['nombre'])) && (!empty($_POST['nombre'])) && 
    (isset($_POST['correo'])) && (!empty($_POST['correo'])) &&
    (isset($_POST['nota1'])) && (!empty($_POST['nota1'])) &&
    (isset($_POST['nota2'])) && (!empty($_POST['nota2'])) &&
    (isset($_POST['nota3'])) && (!empty($_POST['nota3'])) )  {

        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $nota1=$_POST['nota1'];
        $nota2=$_POST['nota2'];
        $nota3=$_POST['nota3'];

        $datos = new servicioDatos();
        
        $actualizar = $datos->actualizarNotas($id,$nombre,$correo,$nota1,$nota2,$nota3);

        if ($actualizar) {
                  $listar = new servicioDatos();
                   $listaUsuarios = $listar->obtenerNotas();
                   $subVista = "listarNotas.php";
                   } else {
                       $subVista = "formularioEditarNotas.php";
                }
        } 
         else {
                
                $subVista = "formularioEditarNotas.php"; 
        }

    $vista = "crud.php";
    require "../vistas/layout.php"

?>