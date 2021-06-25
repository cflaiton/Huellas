<?php
    //session_start();

    if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
        header("Location: vistas/login.php");
    }
    require ('../modelo/gestionDatos.php');
    require "enrutamiento.php";

    $enrutar = new enrutamiento();


    if(isset($_GET['rutaOpc']))
        $vista = $enrutar ->Ruta($_GET['rutaOpc']);

    if(isset($_GET['SubRutaOpc']))
        $subVista = $enrutar ->SubRuta($_GET['SubRutaOpc']);

    $datos = new servicioDatos();
    $listaUsuarios = $datos->obtenerUsuariosAlumnos();

    require ("../vistas/layout.php");




?>