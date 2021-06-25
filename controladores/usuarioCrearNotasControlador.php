<?php

session_start();
if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
    header("Location: vistas/login.php");
}


require '../modelo/gestionDatos.php';


if( (isset($_POST['nombre'])) && (!empty($_POST['nombre'])) && 
    (isset($_POST['correo'])) && (!empty($_POST['correo'])) &&
    (isset($_POST['nota1'])) && (!empty($_POST['nota1'])) &&
    (isset($_POST['nota2'])) && (!empty($_POST['nota2'])) &&
    (isset($_POST['nota3'])) && (!empty($_POST['nota3'])) )  {

        $nom=$_POST['nombre'];
        $cor=$_POST['correo'];
        $n1=$_POST['nota1'];
        $n2=$_POST['nota2'];
        $n3=$_POST['nota3'];

        $datos = new servicioDatos();
        $validar = $datos->validarCorreo($cor);

        if ($validar) { 
            
            $insertarNotas = $datos->crearNotas($nom,$cor,$n1,$n2,$n3);
            
            if($insertarNotas){
                $ExitoCodigo = "Las notas se registraron Exitosamente";
                $vista = "formularioCrearNotas.php"; 
            }else{
                $ErrorCodigo = "Error registrando notas.";
                $vista = "formularioCrearNotas.php"; 
            }
            
         } 
         else {
                $ErrorCodigo = "Error no encuentra correo ".$cor;
                $vista = "formularioCrearNotas.php"; 
        }
    }else {
        $vista = "formularioCrearNotas.php";       
    }

    //$vista = "crud.php";
    require "../vistas/layout.php"

?>