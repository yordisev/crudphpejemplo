<?php
require_once "../conexion.php";

if (isset($_POST['Guardaru'])) {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $nombres = filter_var(strtoupper($_POST['nombres']), FILTER_SANITIZE_STRING);
    $apellidos = filter_var(strtoupper($_POST['apellidos']), FILTER_SANITIZE_STRING);
    $estado = filter_var(strtoupper($_POST['estado']), FILTER_SANITIZE_STRING);
    $errores = '';

    if (empty($usuario) or empty($password) or empty($password2)) {
        $errores .= '<li>Por favor llena todos los datos</li>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
        $statement->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();
        if ($resultado != false) {
            $errores .= "<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
           Este Numero de serial ya esta agregado
          </div>";
        }

       $password = hash('sha512', $password); 
       $password2 = hash('sha512', $password2); 
       if($password != $password2){
           $errores .= "<div class='alert alert-info alert-dismissable'>
           <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
           <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
          Las contraseñas no Coincidede
         </div>";
       }
    }

    if ($errores == ''){
        $statement= $conexion->prepare('INSERT INTO usuarios (id, usuario, password, nombres, apellidos, estado) VALUES (null, :usuario, :password, :nombres, :apellidos, :estado)');
        $statement->execute(array(':usuario'=> $usuario, ':password'=> $password, ':nombres'=> $nombres, ':apellidos'=> $apellidos, ':estado'=> $estado));
        header("location: ../usuarios.php?alert=1");
    }
}
?>