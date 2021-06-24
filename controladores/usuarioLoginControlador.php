<?php
session_start();


require '../modelo/gestionDatos.php';


if( (isset($_POST['usuario'])) && (!empty($_POST['usuario'])) &&
    (isset($_POST['password'])) && (!empty($_POST['password'])) )  {

        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        
        $datos = new servicioDatos();
        $validar = $datos->validarUsuario($usuario,$password);

        if ($validar) {
            $datos1 = new servicioDatos();
             $logueado = $datos1 -> usuarioLogueado($usuario);

            // echo "<pre>";
            // echo var_dump($logueado);
            // echo "<pre>";
            foreach($logueado as $u){
                
                $_SESSION["Correo"] = $u ['correo'];
                $_SESSION["id"] = $u ['codigo'];
                $_SESSION["Rol"] = $u ['nombreRol'];
                $_SESSION["Nombre"] = $u ['nombre'];
    
            }

            

            $ErrorCodigo = "USUARIO LOGUEADO CORRECTAMENTE";
            require "../vistas/layout.php";
            
        }else{
            $ErrorCodigo = "1. Error en el usuario y/o contrasena";
            require  "../vistas/login.php";
            //header("Location: ../login.php");
        }
        
    }else {
        $ErrorCodigo = "Error en el usuario y/o contrasena";
        //header("Location: ../login.php");
    }

?>