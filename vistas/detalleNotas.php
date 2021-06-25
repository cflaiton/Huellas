<?php
// session_start();
//   if(!isset($_SESSION["Correo"] ) && !isset($_SESSION["id"] ) && !isset($_SESSION["Rol"] )&& !isset($_SESSION["Nombre"] )){
//     header("Location: ../vistas/login.php");
//     die();
//   }
?>
<p class="fs-2"> Detalle Usuario </p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Nota 1</th>
      <th scope="col">Nota 2</th>
      <th scope="col">Nota 3</th>
   
    </tr>
  </thead>
  <tbody>


  <?php
    foreach ($notas as $u) {
  ?>
    <tr>
      <th scope="row"><?php echo $u['id']?></th>
      <td><?php echo $u['nombre']?></td>
      <td><?php echo $u['correoE']?></td>
      <td><?php echo $u['nota1']?></td>
      <td><?php echo $u['nota2']?></td>
      <td><?php echo $u['nota3']?></td>
      
    </tr>
<?php
 }
?>
   
  </tbody>
</table>