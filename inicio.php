<?php
include('session.php');
?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">CITAS</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <?php
            $query = mysqli_query($con, "SELECT COUNT(*) as numero FROM db_historial  WHERE DATE_FORMAT(diacita, '%Y-%m-%d') = CURDATE()")
                or die('Error ' . mysqli_error($con));
            $data = mysqli_fetch_assoc($query);
            ?>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Citas dia de Hoy</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>Total citas: <?php echo $data['numero']; ?></h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <?php
            $query = mysqli_query($con, "SELECT COUNT(*) as atendido FROM db_historial  WHERE DATE_FORMAT(diacita, '%Y-%m-%d') = CURDATE() AND	estadocita='ATENDIDO'")
                or die('Error ' . mysqli_error($con));
            $data = mysqli_fetch_assoc($query);
            ?>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Citas Atendidas</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <h4>Atendidos: <?php echo $data['atendido']; ?></h4>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <?php
            $query = mysqli_query($con, "SELECT COUNT(*) as poratender FROM db_historial  WHERE DATE_FORMAT(diacita, '%Y-%m-%d') = CURDATE() AND	estadocita='POR ATENDER'")
                or die('Error ' . mysqli_error($con));
            $data = mysqli_fetch_assoc($query);
            ?>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Citas Pendientes</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                  <h4>Pendientes: <?php echo $data['poratender']; ?></h4>
                  </div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <?php
            $query = mysqli_query($con, "SELECT COUNT(*) as ausente FROM db_historial  WHERE DATE_FORMAT(diacita, '%Y-%m-%d') = CURDATE() AND	estadocita='AUSENTE'")
                or die('Error ' . mysqli_error($con));
            $data = mysqli_fetch_assoc($query);
            ?>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Ausentes en sala</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <h4>Ausentes: <?php echo $data['ausente']; ?></h4>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
              $html['POR ATENDER'] = '<span class="btn btn-primary btn-icon-split">POR ATENDER</span>';    
              $html['ATENDIDO'] = '<span class="btn btn-success btn-icon-split">ATENDIDO</span>';
              $html['AUSENTE'] = '<span class="btn btn-danger btn-icon-split">AUSENTE</span>';
             
  $salida = "";
  $query = "SELECT * FROM db_historial  WHERE DATE_FORMAT(diacita, '%Y-%m-%d') = CURDATE() order by horacita asc ";
  if (isset($_POST['consulta'])) {
    $q = $con->real_escape_string($_POST['consulta']);
    $query = "SELECT * FROM db_historial WHERE diacita LIKE '%$q%' OR horacita LIKE '%$q%' OR especialidad LIKE '%$q%' OR especialista LIKE '%$q%' OR numero LIKE '$q' OR pnombre LIKE '%$q%' OR papellido LIKE '$q' OR estadocita LIKE '$q' ";
  }
  $resultado = $con->query($query);   
?>
              <?php
 if ($resultado->num_rows>0) {
  $salida.="<table class='table table-bordered table-striped' id='dataTable'>
  <thead>
  <tr style='color:white; background-color:#6082b4'>
      <th>No</th>
      <th>DIA</th>
      <th>HORA</th>
      <th>ESPECIALISTA</th>
      <th>CEDULA</th>
      <th>NOMBRE APELLIDO</th>
      <th>ESTADO</th>
      <th>ACCION</th>
  </tr>
</thead>

  <tbody>";
  $no = 1;
  while ($fila = $resultado->fetch_assoc()) {
      $salida.='<tr>
      <td>' . $no . '</td>
            <td>' . $fila['diacita'] . '</td>
            <td>' . $fila['horacita'] . '</td>
            <td>' . $fila['especialista'] . '</td>
            <td>' . $fila['numero'] . '</td>
            <td>' . $fila['pnombre'] . '&nbsp' . $fila['papellido'] . '</td>
            <td>' . $html[$fila['estadocita']] . '</td>
            <td>
            
            <a href="#" class="btn-primary btn-circle btn-sm" title="Asignar Cita" onclick=' . $fila['numero'] . ' data-toggle="modal" data-target="#dataUpdate"><span class="fas fa-clipboard" aria-hidden="true"></span></a>
              <a href="editarafiliados.php?id=' . $fila['numero'] . '" title="Editar datos" class="btn btn-success btn-circle btn-sm"><span class="fas fa-edit" aria-hidden="true"></span></a>
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

  <!-- Content Row -->








  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>