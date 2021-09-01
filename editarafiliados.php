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
              include("conexion.php");
			$id = mysqli_real_escape_string($con,(strip_tags($_GET["id"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM db_afiliados WHERE numero='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			?>
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Afiliados</h6>
                </div>
                <div class="card-body">
                <form action="accion/editafiliado.php" method="POST">
                    <div id="result"></div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Tipo de Documento</label>
                                <select class="form-control" name="documento">
                                    <option><?php echo $row ['documento']; ?></option>
                                    <option value="CC">CEDULA DE CIUDADANIA</option>
                                    <option value="TI">TARJETA DE IDENTIDAD</option>
                                    <option value="RC">REGISTRO CIVIL</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Numero</label>
                                <input type="text" class="form-control" name="numero" value="<?php echo $row ['numero']; ?>" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Primer nombre</label>
                                <input type="text" class="form-control" name="pnombre" value="<?php echo $row ['pnombre']; ?>" autocomplete="off" onkeyup="mayus(this);" required>
                            </div>
                            <div class="col-md-3">
                                <label>Segundo Nombre</label>
                                <input type="text" class="form-control" name="snombre" value="<?php echo $row ['snombre']; ?>" autocomplete="off" onkeyup="mayus(this);" required>
                            </div>
                            <div class="col-md-3">
                                <label>Primer Apellido</label>
                                <input type="text" class="form-control" name="papellido" value="<?php echo $row ['papellido']; ?>" autocomplete="off" onkeyup="mayus(this);" required>
                            </div>
                            <div class="col-md-3">
                                <label>Segundo Apellido</label>
                                <input type="text" class="form-control" name="sapellido" value="<?php echo $row ['sapellido']; ?>" autocomplete="off" onkeyup="mayus(this);" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="fechan" value="<?php echo $row ['fechan']; ?>" autocomplete="off" required>
                            </div>
                            <div class="col-md-4">
                                <label>Sexo</label>
                                <select class="form-control" name="sexo">
                                    <option><?php echo $row ['sexo']; ?></option>
                                    <option value="MASCULINO">MASCULINO</option>
                                    <option value="FEMENINO">FEMENINO</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Tipo de Sangre</label>
                                <select class="form-control" name="tsangre">
                                    <option><?php echo $row ['tsangre']; ?></option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Estado Civil</label>
                                <select class="form-control" name="estadoc">
                                    <option><?php echo $row ['estadoc']; ?></option>
                                    <option value="SOLTERO">SOLTERO</option>
                                    <option value="CASADO">CASADO</option>
                                    <option value="UNION LIBRE">UNION LIBRE</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Telefono</label>
                                <input type="text" class="form-control" name="telefono" value="<?php echo $row ['telefono']; ?>" autocomplete="off" required>
                            </div>
                            <div class="col-md-4">
                                <label>Correo</label>
                                <input type="text" class="form-control" name="correo" value="<?php echo $row ['correo']; ?>" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Ciudad</label>
                                <select class="form-control" name="ciudad">
                                    <option><?php echo $row ['ciudad']; ?></option>
                                    <option value="BARRANQUILLA">BARRANQUILLA</option>
                                    <option value="CARTAGENA">CARTAGENA</option>
                                    <option value="BOGOTA">BOGOTA</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Barrio</label>
                                <input type="text" class="form-control" name="barrio" value="<?php echo $row ['barrio']; ?>" autocomplete="off" required>
                            </div>
                            <div class="col-md-4">
                                <label>Direccion</label>
                                <input type="text" class="form-control" name="direccion" value="<?php echo $row ['direccion']; ?>" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                 
                    <div class="ln_solid"></div>
                   <center>
                     <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-6">
                        <a href="#" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="far fa-save"></i>
                    </span>
                    <input type="submit" name="save" class="btn btn-sm btn-primary" value="Guardar datos">
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