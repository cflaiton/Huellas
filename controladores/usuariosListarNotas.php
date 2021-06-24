<?php
    session_start();
    require '../modelo/gestionDatos.php';

    $codigo = $_GET['id'];
    $datos = new servicioDatos();
    $listaUsuarios = $datos->obtenerNotasAlumno($codigo);


    $vista = "listarNotas.php";
    require "../vistas/layout.php"

?>