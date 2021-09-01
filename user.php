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
	   Afiliado Modificado Correctamente
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
                  
                <div class="offset-lg-9">
                  <a href="adduser.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="far fa-user"></i>
                    </span>
                    <span class="text">Agregar Usuario</span>
                  </a>
                </div>
                  
                </div>
                <div class="card-body">
                <div class="table-responsive">
                <?php
                include "conexion.php";
    $salida = "";
    $query = "SELECT * from usuarios";
    if (isset($_POST['consulta'])) {
    	$q = $con->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM usuarios WHERE usuario LIKE '%$q%' OR nombres LIKE '%$q%' OR apellidos LIKE '%$q%' OR estado LIKE '%$q%' ";
    }
    $resultado = $con->query($query);   
?>
                <?php
   if ($resultado->num_rows>0) {
    $salida.="<table class='table table-bordered' id='dataTable1' width='100%' cellspacing='0'>
    <thead>
    <tr style='color:white; background-color:#6082b4'>
        <th>No</th>
        <th>USUARIO</th>
        <th>NOMBRES</th>
        <th>APELLIDOS</th>
        <th>ESTADO</th>
        <th>ACCIONES</th>
    </tr>
</thead>

    <tbody>";
    $no = 1;
    while ($fila = $resultado->fetch_assoc()) {
        $salida.='<tr>
                 <td>' . $no . '</td>
				<td>' . $fila['usuario'] . '</td>
				<td>' . $fila['nombres'] . '</td>
                <td>' . $fila['apellidos'] . '</td>
                <td>' . $fila['estado'] . '</td>
				<td>

				<a href="upduser.php?id=' . $fila['usuario'] . '" title="Editar datos" class="btn btn-info btn-circle btn-sm"><span class="fas fa-edit" aria-hidden="true"></span></a>
				<a href="acciones/eliminar.php?aksi=delete&nik='.$fila['usuario'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$fila['usuario'].'?\')" class="btn btn-danger btn-circle btn-sm"><span class="fas fa-trash" aria-hidden="true"></span></a>
				</td>           
                </tr>';
                $no++;
    }
    $salida.="</tbody></table>";
}else{
    $salida.="NO HAY DATOS :(";
}
echo $salida;

$con->close();
        ?>
            </div>
                </div>

               
              </div>

            </div>

          </div>

        </div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>