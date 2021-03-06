<?php    // CRUD A LA BASE DE DATOS

require 'conexion.php';


class servicioDatos extends Conexion
{

    public function __construct()
    {
        parent::__construct();
    }


    public function obtenerUsuarios()
    {

        $consulta = $this->conexion->query('SELECT * FROM usuario');
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }

    public function obtenerUsuariosAlumnos()
    {

        $consulta = $this->conexion->query('SELECT * FROM usuario where rol = 3');
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }

    // Obtener Notas

    public function obtenerNotas()
    {

        $consulta = $this->conexion->query('select id,nombreE,correoE,nota1,nota2,nota3, nombre from notas N inner join usuario U on N.nombreE = U.codigo');
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }

    public function obtenerNotasAlumno($codigo)
    {

        $consulta = $this->conexion->query('SELECT id,nombreE,correoE,nota1,nota2,nota3, nombre from notas N inner join usuario U on N.nombreE = U.codigo where nombreE = '.$codigo);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }


    public function crearUsuario($codigo, $nombre, $correo, $contrasena, $rol)
    {

        $sql = "INSERT INTO usuario VALUES(null,'" . $nombre . "','" . $correo . "','" . $contrasena . "','" . $rol . "')";
        $resultado = $this->conexion->query($sql);
        if ($resultado) {
            $this->conexion->close();
            return true;
        } else {
            $this->conexion->close();
            return false;
        }
    }

    public function validarCodigo($codigo)
    {
        $consulta = $this->conexion->query("SELECT * FROM usuario where codigo='" . $codigo . "'");
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if ($resultado)
            return true;
        else
            return false;
    }

    public function consultarUsuario($codigo)
    {
        $consulta = $this->conexion->query("SELECT * FROM usuario where codigo='" . $codigo . "'");
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }

    public function consultarNotas($id)
    {
        $consulta = $this->conexion->query("SELECT id,nombreE,correoE,nota1,nota2,nota3, nombre from notas N inner join usuario U on N.nombreE = U.codigo where id='" . $id . "'");
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }

    public function actualizarUsuario($codigo, $nombre, $correo, $contrasena, $rol)
    {
        $sql = "UPDATE usuario SET nombre = '" . $nombre . "',  correo = '" . $correo . "' ,  contrasena = '" . $contrasena . "',  rol = '" . $rol . "' WHERE codigo = '" . $codigo . "'  ";
        $resultado = $this->conexion->query($sql);
        if ($resultado) {
            $this->conexion->close();
            return true;
        } else {
            $this->conexion->close();
            return false;
        }
    }

    // Actualizar Notas

    public function actualizarNotas($id, $nombre, $correo, $nota1, $nota2, $nota3)
    {
        $sql = "UPDATE notas SET nombreE = '" . $nombre . "',  correoE = '" . $correo . "' ,  nota1 = '" . $nota1 . "', nota2 = '" . $nota2 . "', nota3 = '" . $nota3 . "' WHERE id = '" . $id . "'  ";
        $resultado = $this->conexion->query($sql);
        if ($resultado) {
            $this->conexion->close();
            return true;
        } else {
            $this->conexion->close();
            return false;
        }
    }


    public function borrarUsuario($codigo)
    {
        $sql = "DELETE FROM usuario WHERE codigo = '" . $codigo . "'";
        $resultado = $this->conexion->query($sql);
        if ($resultado) {
            $this->conexion->close();
            return true;
        } else {
            $this->conexion->close();
            return false;
        }
    }

    // Borrar Notas

    public function borrarNotas($id)
    {
        $sql = "DELETE FROM notas WHERE id = '" . $id . "'";
        $resultado = $this->conexion->query($sql);
        if ($resultado) {
            $this->conexion->close();
            return true;
        } else {
            $this->conexion->close();
            return false;
        }
    }



    public function validarUsuario($correo, $contrasena)
    {

        //$rta = false;

        $consulta = $this->conexion->query("SELECT correo, contrasena FROM usuario where correo='" . $correo . "' AND contrasena ='" . $contrasena . "' ");
        $rta = $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $rta;

        // // Validacion con la base de

        // if  ($sql = "SELECT correo, contrasena FROM usuario WHERE correo='".$correo."' AND password='".$password."'") {

        //     $rta = true;
        //     }
        //     return $rta;

        // if ($correo == "cflaiton@gmail.com" && $password =="12345"){

        //     $rta = true;
        // }
        // return $rta;
    }

    public function usuarioLogueado($usuario)
    {

        $consulta = $this->conexion->query("select codigo,nombre, correo, nombreRol from usuario U inner join roles R on  U.rol = R.id where correo = '".$usuario."'");

        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        $this->conexion->close();
        return $resultado;
    }

    // Validar Correo

    public function validarCorreo($correo)
    {
        $consulta = $this->conexion->query("SELECT * FROM usuario where correo='" . $correo . "'");
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if ($resultado)
            return true;
        else
            return false;
    }

    // Crear Notas

    public function crearNotas($nombre, $correo, $nota1, $nota2, $nota3)
    {
        
        $sql = "INSERT INTO  notas (nombreE,correoE,nota1,nota2,nota3) VALUES('".$nombre."','".$correo."','".$nota1."','".$nota2."','".$nota3."')";
        $resultado = $this->conexion->query($sql);
        if ($resultado) {
            $this->conexion->close();
            return true;
        } else {
            $this->conexion->close();
            return false;
        }
    }
}
