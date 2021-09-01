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
     
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
                </div>
                <div class="card-body">
                <form role="form" class="form-horizontal" action="accion/add_user.php" method="post">
						<div class="form-group">
            <div class="row">
							<div class="col-sm-4">
								<label>Nombre de usuario</label>
								<input type="text" name="usuario" class="form-control" required>
							</div>
							<div class="col-sm-4">
								<label>Contraseña</label>
								<input type="password" name="password" class="form-control" required>
							</div>
							<div class="col-sm-4">
								<label>Repite Contraseña</label>
								<input type="password" name="password2" class="form-control" required>
              </div>
</div>
						</div>
						<div class="form-group">
            <div class="row">
							<div class="col-sm-4">
								<label>Nombres</label>
								<input type="text" name="nombres" class="form-control" required>
							</div>
							<div class="col-sm-4">
								<label>Apellidos</label>
								<input type="text" name="apellidos" class="form-control" required>
							</div>
							<div class="col-sm-4">
								<label>ESTADO</label>
								<select name="estado" class="form-control">
									<option value=""> ----- </option>
									<option value="ACTIVO">ACTIVO</option>
									<option value="INACTIVO">INACTIVO</option>
								</select>
              </div>
						</div>
						</div>

<center>
  <div class="form-group">
							<label class="col-sm-4 control-label"></label>
							<div class="col-sm-4">
								<input type="submit" class="btn btn-primary btn-submit" name="Guardaru" value="Guardar">
								<a href="user.php" class="btn btn-danger btn-reset">Atras</a>
							</div>
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