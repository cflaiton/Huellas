<?php
session_start();
  if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
    header("Location: ../vistas/login.php");
    die();
  }
?>
   
    <?php 

if (!isset($subVista))
     $subVista="crudIntro.php";

   require $subVista;

?>
