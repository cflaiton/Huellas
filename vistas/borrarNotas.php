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
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Nota 1</th>
      <th scope="col">Nota 2</th>
      <th scope="col">Nota 3</th>
      <th scope="col"> </th>
   
    </tr>
  </thead>
  <tbody>

  <?php
    foreach ($notas as $u) {
  ?>
    <tr>
      <th scope="row"><?php echo $u['id']?></th>
      <td><?php echo $u['nombreE']?></td>
      <td><?php echo $u['correoE']?></td>
      <td><?php echo $u['nota1']?></td>
      <td><?php echo $u['nota2']?></td>
      <td><?php echo $u['nota3']?></td>

      <td> 
        <form class="row g-3" action="../controladores/usuarioBorrarNotasControlador.php" method="post">
        <input type="hidden"  name="id"  value="<?php echo $u['id'] ?>" >
        <div class="col-12">
         <button type="submit" class="btn btn-danger"> Borrar Notas </button>
            </div>
            </form>
      </td>
    </tr>

<?php
 }
?>
   
  </tbody>
</table>

<div class='alert alert-danger' role='alert'> Desea Elimnar los Datos del Siguiete usuario ? </div>