<?php
session_start();
  if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
    header("Location: ../vistas/login.php");
    die();
  }
?>
<h1>Bienvenido <?php echo $_SESSION ["Nombre"]; ?></h1>