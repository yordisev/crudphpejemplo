<?php
include('session.php');
?>

<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
              <?php

if (empty($_GET['alert'])) {
  echo "";
} elseif ($_GET['alert'] == 1) {
  echo "<div class='alert alert-success alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
	   Equipo Agregado correctamente.
	  </div>";
} elseif ($_GET['alert'] == 2) {
  echo "<div class='alert alert-warning alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
	   Equipo modificado correcamente.
	  </div>";
} elseif ($_GET['alert'] == 3) {
  echo "<div class='alert alert-warning alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
	 Comentario ingresado correctamente
	  </div>";
}elseif ($_GET['alert'] == 4) {
  echo "<div class='alert alert-success alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
	   Este Numero de serial ya esta agregado
	  </div>";
}elseif ($_GET['alert'] == 5) {
	echo "<div class='alert alert-danger alert-dismissable'>
		  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		  <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
		 Equipo eliminado Correctamente
		</div>";
  }
?>
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Afiliados</h6>
                </div>
                <div class="card-body">
                <form action="accion/addafiliado.php" method="POST">
                    <div id="result"></div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Tipo de Documento</label>
                                <select class="form-control" name="documento">
                                    <option value="">SELECCIONAR</option>
                                    <option value="CC">CEDULA DE CIUDADANIA</option>
                                    <option value="TI">TARJETA DE IDENTIDAD</option>
                                    <option value="RC">REGISTRO CIVIL</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Numero</label>
                                <input type="text" class="form-control" name="numero" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Primer nombre</label>
                                <input type="text" class="form-control" name="pnombre" autocomplete="off" onkeyup="mayus(this);" required>
                            </div>
                            <div class="col-md-3">
                                <label>Segundo Nombre</label>
                                <input type="text" class="form-control" name="snombre" autocomplete="off" onkeyup="mayus(this);" required>
                            </div>
                            <div class="col-md-3">
                                <label>Primer Apellido</label>
                                <input type="text" class="form-control" name="papellido" autocomplete="off" onkeyup="mayus(this);" required>
                            </div>
                            <div class="col-md-3">
                                <label>Segundo Apellido</label>
                                <input type="text" class="form-control" name="sapellido" autocomplete="off" onkeyup="mayus(this);" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="fechan" autocomplete="off" required>
                            </div>
                            <div class="col-md-4">
                                <label>Sexo</label>
                                <select class="form-control" name="sexo">
                                    <option value="">SELECCIONAR</option>
                                    <option value="MASCULINO">MASCULINO</option>
                                    <option value="FEMENINO">FEMENINO</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Tipo de Sangre</label>
                                <select class="form-control" name="tsangre">
                                    <option value="">RH</option>
                                    <option value="MASCULINO">O+</option>
                                    <option value="FEMENINO">O-</option>
                                    <option value="MASCULINO">A+</option>
                                    <option value="FEMENINO">A-</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Estado Civil</label>
                                <select class="form-control" name="estadoc">
                                    <option value="">SELECCIONAR</option>
                                    <option value="SOLTERO">SOLTERO</option>
                                    <option value="CASADO">CASADO</option>
                                    <option value="UNION LIBRE">UNION LIBRE</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Telefono</label>
                                <input type="text" class="form-control" name="telefono" autocomplete="off" required>
                            </div>
                            <div class="col-md-4">
                                <label>Correo</label>
                                <input type="text" class="form-control" name="correo" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Ciudad</label>
                                <select class="form-control" name="ciudad">
                                    <option value="">SELECCIONAR</option>
                                    <option value="BARRANQUILLA">BARRANQUILLA</option>
                                    <option value="CARTAGENA">CARTAGENA</option>
                                    <option value="BOGOTA">BOGOTA</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Barrio</label>
                                <input type="text" class="form-control" name="barrio" autocomplete="off" required>
                            </div>
                            <div class="col-md-4">
                                <label>Direccion</label>
                                <input type="text" class="form-control" name="direccion" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                 
                    <div class="ln_solid"></div>
                   <center>
                     <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-6">
                        <a href="#"  class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="far fa-save"></i>
                    </span>
                    <input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
                  </a>
                  <a href="afiliados.php" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="far fa-arrow-alt-circle-left"></i>
                    </span>
                    <span class="text">Atras</span>
                  </a>
                        </div>
                   </center>
                        
                  
                </form>
                </div>
              </div>

            </div>

          </div>

        </div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>