<?php

if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
    header("Location: ../vistas/login.php");
}else{

    require "enrutamiento.php";
    $enrutar = new enrutamiento();
    
    
    if(isset($_GET['rutaOpc']))
        $vista = $enrutar ->Ruta($_GET['rutaOpc']);
    
    if(isset($_GET['SubRutaOpc']))
        $subVista = $enrutar ->SubRuta($_GET['SubRutaOpc']);
    
    require "../vistas/layout.php";

}




?>

