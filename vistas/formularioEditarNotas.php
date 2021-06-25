<?php
session_start();
  if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
    header("Location: ../vistas/login.php");
    die();
  }
?>
<p class="fs-2"> Editar Datos  Usuario </p>

<form class="row g-3" action="../controladores/usuarioEditarNotasControlador.php" method="post">
<div class="col-12">
    <label class="form-label">Id: <strong> <?php echo $id ?> </strong> </label>
    <input type="hidden"  name="id"  value="<?php echo $id ?>" >
  </div>

  <div class="col-12">
  <label class="form-label">Nombre</label>
    <input type="text" class="form-control"  placeholder="Nombre Apellido" value="<?php echo $nombre ?>" disabled>
    <input type="hidden"  name="nombre" value="<?php echo $nombreCod ?>" >
  </div>

  <div class="col-12">
  <label class="form-label">Correo</label>
    <input type="email" class="form-control"  placeholder="usuario@dominio"  value="<?php echo $correo ?>" disabled>
    <input type="hidden" name="correo"   value="<?php echo $correo ?>" >
  </div>

  <div class="col-12">
  <label class="form-label">Nota1</label>
    <input type="text" class="form-control" name="nota1" placeholder="xxxxxx"  value="<?php echo $nota1 ?>" required>
  </div>

  <div class="col-12">
  <label class="form-label">Nota2</label>
    <input type="text" class="form-control" name="nota2" placeholder="xxxxxx"  value="<?php echo $nota2 ?>" required>
  </div>

  <div class="col-12">
  <label class="form-label">Nota3</label>
    <input type="text" class="form-control" name="nota3" placeholder="xxxxxx"  value="<?php echo $nota2 ?>" required>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary"> Actualizar Notas </button>
  </div>
</form>