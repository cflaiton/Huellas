<?php
   //session_start();
   
    if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
        header("Location: ../vistas/login.php");
    }else{
        require '../modelo/gestionDatos.php';
        if(!isset($_SESSION))
            header("Location: vistas/login.php");

        if(isset($_GET['id'])){
            $codigo = $_GET['id'];
            $datos = new servicioDatos();
            $listaUsuarios = $datos->obtenerNotasAlumno($codigo);
        }else{
            $datos = new servicioDatos();
            $listaUsuarios = $datos->obtenerNotas();
        }
        


        $vista = "listarNotas.php";
        require "../vistas/layout.php";
    }
    

?>