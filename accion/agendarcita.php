<?php
session_start();
require_once "../conexion.php";

			if (isset($_POST['insert'])) {
				$diacita = mysqli_real_escape_string($con, (strip_tags($_POST["diacita"], ENT_QUOTES))); //Escanpando caracteres 
				$horacita = mysqli_real_escape_string($con, (strip_tags($_POST["horacita"], ENT_QUOTES))); //Escanpando caracteres 
				$especialidad = mysqli_real_escape_string($con, (strip_tags($_POST["especialidad"], ENT_QUOTES))); //Escanpando caracteres 
				$especialista = mysqli_real_escape_string($con, (strip_tags($_POST["especialista"], ENT_QUOTES))); //Escanpando caracteres 
				$numero = mysqli_real_escape_string($con, (strip_tags($_POST["numero"], ENT_QUOTES))); //Escanpando caracteres 
				$pnombre = mysqli_real_escape_string($con, (strip_tags($_POST["pnombre"], ENT_QUOTES))); //Escanpando caracteres
				$papellido = mysqli_real_escape_string($con, (strip_tags($_POST["papellido"], ENT_QUOTES))); //Escanpando caracteres 
				$sapellido = mysqli_real_escape_string($con, (strip_tags($_POST["sapellido"], ENT_QUOTES))); //Escanpando caracteres  
				$usuario = mysqli_real_escape_string($con, (strip_tags($_POST["usuario"], ENT_QUOTES))); //Escanpando caracteres 
				$asuntocita = mysqli_real_escape_string($con, (strip_tags($_POST["asuntocita"], ENT_QUOTES))); //Escanpando caracteres 
				$estadocita = mysqli_real_escape_string($con, (strip_tags($_POST["estadocita"], ENT_QUOTES))); //Escanpando caracteres 
				$fechacomentario = mysqli_real_escape_string($con, (strip_tags($_POST["fechacomentario"], ENT_QUOTES))); //Escanpando caracteres 

					$insert = mysqli_query($con, "INSERT INTO db_historial(diacita,horacita,especialidad,especialista,numero,pnombre,papellido,sapellido,usuario,asuntocita,estadocita,fechacomentario)
															VALUES('$diacita','$horacita','$especialidad','$especialista','$numero','$pnombre','$papellido','$sapellido','$usuario','$asuntocita','$estadocita',NOW())") or die(mysqli_connect_error());
					if ($insert) {
						header("location: ../afiliados.php?alert=6");
					} else {
						header("location: ../vistaequipo.php?alert=6");
					}
				
			}
			?>