<?php
require_once "../conexion.php";

			
            
			if(isset($_POST['save'])){
				$documento = mysqli_real_escape_string($con, (strip_tags($_POST["documento"], ENT_QUOTES))); //Escanpando caracteres 
				$numero = mysqli_real_escape_string($con, (strip_tags($_POST["numero"], ENT_QUOTES))); //Escanpando caracteres 
				$pnombre = mysqli_real_escape_string($con, (strip_tags($_POST["pnombre"], ENT_QUOTES))); //Escanpando caracteres 
				$snombre = mysqli_real_escape_string($con, (strip_tags($_POST["snombre"], ENT_QUOTES))); //Escanpando caracteres 
				$papellido = mysqli_real_escape_string($con, (strip_tags($_POST["papellido"], ENT_QUOTES))); //Escanpando caracteres 
				$sapellido = mysqli_real_escape_string($con, (strip_tags($_POST["sapellido"], ENT_QUOTES))); //Escanpando caracteres 
				$fechan = mysqli_real_escape_string($con, (strip_tags($_POST["fechan"], ENT_QUOTES))); //Escanpando caracteres 
				$sexo = mysqli_real_escape_string($con, (strip_tags($_POST["sexo"], ENT_QUOTES))); //Escanpando caracteres 
                $tsangre = mysqli_real_escape_string($con, (strip_tags($_POST["tsangre"], ENT_QUOTES))); //Escanpando caracteres 
				$estadoc = mysqli_real_escape_string($con, (strip_tags($_POST["estadoc"], ENT_QUOTES))); //Escanpando caracteres 
				$telefono = mysqli_real_escape_string($con, (strip_tags($_POST["telefono"], ENT_QUOTES))); //Escanpando caracteres 
				$correo = mysqli_real_escape_string($con, (strip_tags($_POST["correo"], ENT_QUOTES))); //Escanpando caracteres 
				$ciudad = mysqli_real_escape_string($con, (strip_tags($_POST["ciudad"], ENT_QUOTES))); //Escanpando caracteres 
				$barrio = mysqli_real_escape_string($con, (strip_tags($_POST["barrio"], ENT_QUOTES))); //Escanpando caracteres 
				$direccion = mysqli_real_escape_string($con, (strip_tags($_POST["direccion"], ENT_QUOTES))); //Escanpando caracteres 
				
				
				$update = mysqli_query($con, "UPDATE db_afiliados SET documento = '$documento',
				pnombre      = '$pnombre',
				snombre    = '$snombre',
				papellido    = '$papellido',
				sapellido       = '$sapellido',
				fechan      = '$fechan',
				sexo      = '$sexo',
				tsangre    = '$tsangre',
				estadoc    = '$estadoc',
				telefono       = '$telefono',
				correo      = '$correo',
				ciudad      = '$ciudad',
				barrio    = '$barrio',
				direccion    = '$direccion'
		  WHERE numero    = '$numero'") or die(mysqli_error());
				if($update){
					header("location: ../afiliados.php?alert=2");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}
			?>