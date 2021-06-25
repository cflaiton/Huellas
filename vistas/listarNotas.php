<?php
session_start();
  if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
    header("Location: ../vistas/login.php");
    die();
  }
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Nota 1</th>
      <th scope="col">Nota 2</th>
      <th scope="col">Nota 3</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>

  <?php
    foreach ($listaUsuarios as $notas) {
  ?>
    <tr>
      <th scope="row"><?php echo $notas['id']?></th>
      <td><?php echo $notas['nombre']?></td>
      <td><?php echo $notas['correoE']?></td>
      <td><?php echo $notas['nota1']?></td>
      <td><?php echo $notas['nota2']?></td>
      <td><?php echo $notas['nota3']?></td>

      <?php if(isset($_SESSION["Rol"]) && $_SESSION["Rol"] == "Profesor" )  {?>
      <td> <a href="../controladores/usuarioDetalleNotasControlador.php?id=<?php echo $notas['id']?>"> Detalle </a> </td>
      <td> <a href="../controladores/usuarioDatosEditarNotasControlador.php?id=<?php echo $notas['id']?>"> Editar </a> </td>
      <td> <a href="../controladores/usuarioDetalleBorrarNotasControlador.php?id=<?php echo $notas['id']?>"> Borrar </a> </td>
      <?php  } ?>
    </tr>
<?php
 }
?>
   
  </tbody>
</table>