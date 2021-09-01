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
                $id = mysqli_real_escape_string($con, (strip_tags($_GET["id"], ENT_QUOTES)));
                $sql = mysqli_query($con, "SELECT * FROM db_afiliados WHERE numero='$id'");
                if (mysqli_num_rows($sql) == 0) {
                    header("Location: index.php");
                } else {
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
                                    <input type="text" name="documento" class="form-control" value="<?php echo $row['documento']; ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label>Numero</label>
                                    <input type="text" class="form-control" name="numero" value="<?php echo $row['numero']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Primer nombre</label>
                                    <input type="text" class="form-control" name="pnombre" value="<?php echo $row['pnombre']; ?>" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label>Segundo Nombre</label>
                                    <input type="text" class="form-control" name="snombre" value="<?php echo $row['snombre']; ?>" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label>Primer Apellido</label>
                                    <input type="text" class="form-control" name="papellido" value="<?php echo $row['papellido']; ?>" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label>Segundo Apellido</label>
                                    <input type="text" class="form-control" name="sapellido" value="<?php echo $row['sapellido']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" name="fechan" value="<?php echo $row['fechan']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label>Sexo</label>
                                    <input type="text" class="form-control" name="sexo" value="<?php echo $row['sexo']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label>Tipo de Sangre</label>
                                    <input type="text" class="form-control" name="tsangre" value="<?php echo $row['tsangre']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Estado Civil</label>
                                    <input type="text" class="form-control" name="estadoc" value="<?php echo $row['estadoc']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control" name="telefono" value="<?php echo $row['telefono']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label>Correo</label>
                                    <input type="text" class="form-control" name="correo" value="<?php echo $row['correo']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" value="<?php echo $row['ciudad']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label>Barrio</label>
                                    <input type="text" class="form-control" name="barrio" value="<?php echo $row['barrio']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label>Direccion</label>
                                    <input type="text" class="form-control" name="direccion" value="<?php echo $row['direccion']; ?>" readonly>
                                </div>
                            </div>
                        </div>
<center>
<div class="ln_solid"></div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-10">
                                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#add-stock">Agendar Cita</a>
                                    <a href="afiliados.php" class="btn btn-danger">Atras</a>
                                </div>
                            </div>
                        </div>
</center>
                        
                        <table class="table table-bordered table-striped table-hover">
                            <tr style="color:white; background-color:#6082b4">
                                <th class='text-center' colspan=5>HISTORIAL DE CITAS</th>
                            </tr>
                            <tr class='text-center' style="color:white; background-color:#6082b4">
                                <th class="center">N</th>
                                <th class="center">CEDULA</th>
                                <th class="center">USUARIO</th>
                                <th class="center">ASUNTO CITA</th>
                                <th class="center">FECHA DE CITA</th>
                            </tr>
                            <?php
                            $no = 1;
                            $query = mysqli_query($con, "SELECT numero, usuario, asuntocita, fechacomentario  FROM db_historial WHERE numero='$_GET[id]'")
                                or die('error: ' . mysqli_error($con));
                            while ($data = mysqli_fetch_assoc($query)) {
                                echo '
                      <tr>
                        <td width="30" class="center">' . $no . '</td>
                        <td width="80" class="center">' . $data['numero'] . '</td>
                        <td width="80" class="center">' . $data['usuario'] . '</td>
						<td width="80" class="center">' . $data['asuntocita'] . '</td>
						<td width="80" class="center">' . $data['fechacomentario'] . '</td>
                      </tr>
                      ';
                                $no++;
                            }
                            ?>
                        </table>
                    </form>
                    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
			   @@@@@@@@@@@@@@@@@@@@@@ MODAL DE Citas @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
			   @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
               <form class="form-horizontal" action="accion/agendarcita.php" method="POST">
                            <!-- Modal -->
                            <div id="add-stock" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div style="color:white; background-color:#6082b4" class="modal-header">
                                            <h4 class="modal-title">Agendar Cita</h4>
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Dia Cita</label>
                                                        <input type="date" class="form-control" name="diacita" id="diacita" autocomplete="off" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Hora Cita</label>
                                                        <input type="time" class="form-control" name="horacita" id="horacita" autocomplete="off" required>
                                                    </div>
                                                    <div class="col-md-3">
                                <label>Especialidad</label>
                                <select class="form-control" name="especialidad">
                                    <option value="">SELECCIONAR</option>
                                    <option value="GINECOLOGIA">GINECOLOGIA</option>
                                    <option value="DERMATOLOGO">DERMATOLOGO</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Nombre Especialista</label>
                                <select class="form-control" name="especialista">
                                    <option value="">SELECCIONAR</option>
                                    <option value="YORDIS ESCORCIA">YORDIS ESCORCIA</option>
                                    <option value="DAIRO BARRIOS">DAIRO BARRIOS</option>
                                </select>
                            </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                         <label>Cedula</label>
                                                    <input name="numero" class="form-control" value="<?php echo $row['numero']; ?>" readonly>
                                                </div>
                                                    <div class="col-md-3">
                                                        <label>Primer nombre</label>
                                                        <input type="text" class="form-control" name="pnombre" value="<?php echo $row['pnombre']; ?>" readonly>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Primer Apellido</label>
                                                        <input type="text" class="form-control" name="papellido" value="<?php echo $row['papellido']; ?>" readonly>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Segundo Apellido</label>
                                                        <input type="text" class="form-control" name="sapellido" value="<?php echo $row['sapellido']; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- <label class="col-sm-4 control-label"><b>USUARIO</b></label> -->
                                                <div class="col-sm-4">
                                                    <input name="usuario" class="form-control" value="<?php echo $login_session; ?>" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <textarea rows="5" cols="50" name="asuntocita" required></textarea>
                                                    </div>
                                                    <div class="col-md-3">
                                <label>Estado Cita</label>
                                <select class="form-control" name="estadocita">
                                    <option value="">SELECCIONAR</option>
                                    <option value="POR ATENDER">POR ATENDER</option>
                                    <option value="ATENDIDO">ATENDIDO</option>
                                </select>
                            </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <button name="insert" type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
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