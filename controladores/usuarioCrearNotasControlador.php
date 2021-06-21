<?php

session_start();


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
            
            // echo "<pre>";
            // echo var_dump($insertarNotas);
            // echo "<pre>";


            //    if ($inserarUsuario) {
            //       $listar = new servicioDatos();
            //        $listaUsuarios = $listar->obtenerUsuarios();
            //        $subVista = "listarNotas.php";
            //        } else {
            //            $subVista = "formularioCrearNotas.php";
            //     }
            $ExitoCodigo = "Las notas se registraron Exitosamente";
                $vista = "formularioCrearNotas.php"; 
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