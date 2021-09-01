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
                  <h6 class="m-0 font-weight-bold text-primary">Editar Usuarios</h6>
                </div>
                <div class="card-body">
				<?php 
            include("conexion.php");
			$id = mysqli_real_escape_string($con,(strip_tags($_GET["id"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM usuarios WHERE usuario='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("location: user.php?alert=4");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			?>
					<form role="form" class="form-horizontal" action="accion/edituser.php" method="post">
						<div class="form-group">
						<div class="row">
							<div class="col-sm-4">
								<label>Nombre de usuario</label>
								<input type="text" name="usuario" class="form-control" value="<?php echo $row ['usuario']; ?>" readonly>
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
								<input type="text" name="nombres" class="form-control" value="<?php echo $row ['nombres']; ?>" readonly>
							</div>
							<div class="col-sm-4">
								<label>Apellidos</label>
								<input type="text" name="apellidos" class="form-control" value="<?php echo $row ['apellidos']; ?>" readonly>
							</div>
							<div class="col-sm-4">
								<label>ESTADO</label>
								<select name="estado" class="form-control">
                                <option><?php echo $row ['estado']; ?></option>
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
								<input type="submit" class="btn btn-primary btn-submit" name="editaruser" value="Guardar">
								<a href="user.php" class="btn btn-danger pull-right">Atras</a>
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