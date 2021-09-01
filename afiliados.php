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
  }elseif ($_GET['alert'] == 6) {
    echo "<div class='alert alert-success alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
       Cida Asignada Correctamente
      </div>";
    }
?>
                <div class="card-header py-3">
                  
                <div class="offset-lg-9">
                  <a href="agregarafiliados.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="far fa-user"></i>
                    </span>
                    <span class="text">Agregar Afiliado</span>
                  </a>
                </div>
                  
                </div>
                <div class="card-body">
                <div class="table-responsive">
                   <?php
                

                  include("modal.php");
                $html['MASCULINO'] = '<span class="btn btn-primary btn-icon-split">MASCULINO</span>';    
                $html['FEMENINO'] = '<span class="btn btn-warning btn-icon-split">FEMENINO</span>';
               
    $salida = "";
    $query = "SELECT * from db_afiliados where numero order by pnombre asc ";
    if (isset($_POST['consulta'])) {
    	$q = $con->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM db_afiliados WHERE numero LIKE '%$q%' OR pnombre LIKE '%$q%' OR snombre LIKE '%$q%' OR papellido LIKE '%$q%' OR sapellido LIKE '$q' ";
    }
    $resultado = $con->query($query);   
?>
                <?php
   if ($resultado->num_rows>0) {
    $salida.="<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
    <thead>
    <tr style='color:white; background-color:#6082b4'>
        <th>No</th>
        <th>TIPO</th>
        <th>NUMERO</th>
        <th>NOMBRE</th>
        <th>APELLIDO 1</th>
        <th>APELLIDO 2</th>
        <th>SEXO</th>
        <th>ACCIONES</th>
    </tr>
</thead>

    <tbody>";
    $no = 1;
    while ($fila = $resultado->fetch_assoc()) {
        $salida.='<tr>
        <td>' . $no . '</td>
							<td>' . $fila['documento'] . '</td>
							<td>' . $fila['numero'] . '</td>
							<td><a href="vistaafiliado.php?id=' . $fila['numero'] . '"><span class="far fa-user" aria-hidden="true"></span> ' . $fila['pnombre'] . '</a></td>
              <td>' . $fila['papellido'] . '</td>
              <td>' . $fila['sapellido'] . '</td>
							<td>' . $html[$fila['sexo']] . '</td>
              <td>
              
              <a href="#" class="btn-primary btn-circle btn-sm" title="Asignar Cita" onclick=' . $fila['numero'] . ' data-toggle="modal" data-target="#dataUpdate"><span class="fas fa-clipboard" aria-hidden="true"></span></a>
								<a href="editarafiliados.php?id=' . $fila['numero'] . '" title="Editar datos" class="btn btn-success btn-circle btn-sm"><span class="fas fa-edit" aria-hidden="true"></span></a>
								<a href="acciones/eliminar.php?aksi=delete&nik='.$fila['numero'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$fila['numero'].'?\')" class="btn btn-danger btn-circle btn-sm"><span class="fas fa-trash" aria-hidden="true"></span></a>
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
          <script src="app.js"></script>
        </div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>