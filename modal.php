

      <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
			   @@@@@@@@@@@@@@@@@@@@@@ MODAL DE COMENTARIO @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
			   @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
			<form class="form-horizontal" action="accion/insertcomentario.php" method="POST">
				<!-- Modal -->
				<div id="dataUpdate" class="modal fade" role="dialog">
					<div class="modal-dialog modal-lg">
						<!-- Modal content-->
						<div class="modal-content">
							<div style="color:white; background-color:#6082b4" class="modal-header">
								<button type="button" class="close" data-dismiss="modal">×</button>
								<h4 class="modal-title">Agregar Comentario</h4>
							</div>
							<div class="form-group">
                        <div class="row">
                            <!-- <div class="col-md-6">
                                <label>Tipo de Documento</label>
                                <select class="form-control" name="documento" id="documento">
                                    <option></option>
                                    <option value="CC">CEDULA DE CIUDADANIA</option>
                                    <option value="TI">TARJETA DE IDENTIDAD</option>
                                    <option value="RC">REGISTRO CIVIL</option>
                                </select>
                            </div> -->
                            <div class="col-md-6">
                                <label>Numero</label>
                                <input type="text" class="form-control" name="numero" id="numero"  autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Primer nombre</label>
                                <input type="text" class="form-control" name="pnombre" id="pnombre" value="<?php echo $row ['pnombre']; ?>" autocomplete="off" onkeyup="mayus(this);" required>
                            </div>
                            <div class="col-md-3">
                                <label>Segundo Nombre</label>
                                <input type="text" class="form-control" name="snombre" id="snombre" value="<?php echo $row ['snombre']; ?>" autocomplete="off" onkeyup="mayus(this);" required>
                            </div>
                            <div class="col-md-3">
                                <label>Primer Apellido</label>
                                <input type="text" class="form-control" name="papellido" id="papellido" value="<?php echo $row ['papellido']; ?>" autocomplete="off" onkeyup="mayus(this);" required>
                            </div>
                            <div class="col-md-3">
                                <label>Segundo Apellido</label>
                                <input type="text" class="form-control" name="sapellido" id="sapellido" value="<?php echo $row ['sapellido']; ?>" autocomplete="off" onkeyup="mayus(this);" required>
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