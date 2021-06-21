<div class="row">
  <div class="col-md-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Formulario de Registro <small> Coordinador/Profesor/Estudiante</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Configuración 1</a>
              <a class="dropdown-item" href="#">Configuración 2</a>
            </div>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <!-- <form class="form-label-left input_mask" action="../controladores/usuarioCrearControlador.php" method="post">
          <div class="col-12">

            <input type="text" class="form-control" name="codigo" placeholder="0000" hidden>
          </div>

          <div class="col-md-12  form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="nombre" placeholder="Nombre Apellido" required>
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-12  form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="correo" placeholder="usuario@dominio.com" required>
            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-12  form-group has-feedback">
            <input type="password" class="form-control has-feedback-left" id="inputSuccess2" name="contrasena" placeholder="Contraseña" required>
            <span class="fa fa-unlock-alt form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-12  form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="rol" placeholder="Rol de usuario" required>
            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
          </div>

          <br>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form> -->


        <form action="../controladores/usuarioCrearControlador.php" method="post">

            <!-- // hidden y nombre -->
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
            <input type="text" class="form-control" name="codigo" placeholder="0000" hidden>
            <input type="text" id="first-name" required="required" class="form-control " name="nombre" >
            <!-- <input type="text" id="first-name" required="required" class="form-control " name="nombre" require> -->


            </div>
          </div>

          <!-- // Correo -->

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Correo <span class="required">*</span> </label>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="last-name"  required="required" class="form-control" name="correo" >
            </div>
          </div>

            <!-- // Contraseña -->

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Contraseña <span class="required">*</span> </label>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="last-name"  required="required" class="form-control" name="contrasena" >
            </div>
          </div>


          <!-- // Desplegable -->

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align ">Rol</label>
            <div class="col-md-6 col-sm-6 ">
              <select class="form-control" name="rol">
                <option value="1">Coordinador</option>
                <option value="2">Profesor</option>
                <option value="3">Estudiante</option>
              </select>
            </div>
          </div>

          <!-- // Botones -->

          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button class="btn btn-primary" type="reset">Resetear</button>
              <button type="submit" class="btn btn-success">Registrar</button>
            </div>
          </div>

        </form>

        <?php

        if (isset($ErrorCodigo))
          echo "<div class='alert alert-danger' role='alert'> $ErrorCodigo </div>"
        ?>

      </div>
    </div>