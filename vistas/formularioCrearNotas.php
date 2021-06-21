<div class="row">
  <div class="col-md-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Formulario de Registro Notas <small> Estudiante</small></h2>
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
        

        <form action="../controladores/usuarioCrearControlador.php" method="post">

        <!-- // Desplegable -->

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align ">Nombre</label>
            <div class="col-md-6 col-sm-6 ">
              <select class="form-control" name="rol">
                <option value="1">Cristian Laiton</option>
                <option value="2">Fredy Forero</option>
                <option value="3">Julian Marcelo</option>
              </select>
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

            <!-- // Nota 1 -->

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nota 1 <span class="required">*</span> </label>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="last-name"  required="required" class="form-control" name="nota1" >
            </div>
          </div>

           <!-- // Nota 2 -->

           <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nota 2 <span class="required">*</span> </label>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="last-name"  required="required" class="form-control" name="nota2" >
            </div>
          </div>

           <!-- // Nota 3 -->

           <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nota 3 <span class="required">*</span> </label>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="last-name"  required="required" class="form-control" name="nota3" >
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