<?php

require_once "../conexion.php";

$errores ='';


			if (isset($_POST['add'])) {
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
				


				$cek = mysqli_query($con, "SELECT * FROM db_afiliados WHERE numero='$numero'");
				if (mysqli_num_rows($cek) == 0) {
					$insert = mysqli_query($con, "INSERT INTO db_afiliados(documento,numero,pnombre,snombre,papellido,sapellido,fechan,sexo,tsangre,estadoc,telefono,correo,ciudad,barrio,direccion)
															VALUES('$documento','$numero','$pnombre','$snombre','$papellido','$sapellido','$fechan','$sexo','$tsangre','$estadoc','$telefono','$correo','$ciudad','$barrio','$direccion')") or die(mysqli_error());
					if ($insert) {
						header("location: ../afiliados.php?alert=1");
					} else {
						header("location: ../equipos.php?alert=3");
					}
				} else {
					header("location: ../equipos.php?alert=4");
				}
			}
			?>