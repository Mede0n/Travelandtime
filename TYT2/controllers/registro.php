<?php
include("../db/conexion.php");
if (!isset($_POST) || empty($_POST)) { 
    ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Travel and Time</title>
		<link rel="stylesheet" href="../views/bootstrap.min.css">
        <link rel="stylesheet" href="../estilos/index.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
$(function() {
    $("#fecha").datepicker({
      showButtonPanel: true,
      changeMonth: true,
      changeYear: true
    });
  } 
  $( function() {
    $(document).tooltip();
  } );
  );
    </script>
    </head>
    
    <body>
    <h1>Registro</h1>
    <form action="" method="post">
    <div>
            <div>
            Nombre de usuario <input type="text" title="Introduzca su nombre de usuario" name="user" placeholder="user" required>
            </div>
            <div>
            Password <input type="text" title="Introduzca su Futura Contraseña" name="pass" placeholder="password" required>
            </div>
            <div>
            Nombre <input type="text" title="Introduzca su nombre " name="nombre" placeholder="Nombre" required>
            </div>
            <div>
            Apellido 1 <input type="text" title="Introduzca su apellido" name="apellido1" placeholder="Apellido1" required>
            </div
            <div>
            DNI <input type="text" name="dni" title="Introduzca su Dni Correctamente" placeholder="dni" pattern="[0-9]{8}[A-Z]$" required>
            </div>
            <div>
            Direccion <input type="text"  title="Introduzca su Direccion" name="direccion" placeholder="direccion" required>
            </div>
            <div>
            Email <input type="mail" title="Introduzca su Email" name="email" placeholder="Email" required>
            </div>
            <div>
            Fecha Nacimiento <input type="text" title="Introduzca su Fecha de Nacimiento" name="fecha" placeholder="Fecha Nacimiento" id="fecha"  required>
            </div>
            <div>
            Codigo Postal <input type="text" title="Introduzca su Codigo Postal" name="cp" placeholder="Codigo Postal" id="cp"  required>
            </div>
            </BR>
         <div><input type="submit" value="Enviar"></div>
         </div>
        </form>
        <button><a href="login.php">Login</a></button>
        <button><a href="../index.php">Inicio</a></button>
    </body>
    </html>
    <?php
}else {
    $user=$_POST['user']; 
    $pass=$_POST['pass'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido1'];
    $DNI=$_POST['dni'];
    $Direccion=$_POST['direccion'];
    $Email=$_POST['email'];
    $fecha=$_POST['fecha'];
    $cp=$_POST['cp'];
    session_start();
    include("../models/registro.php");
      $resul=registrar($user,$pass,$nombre,$apellido,$DNI,$Direccion,$Email,$fecha,$cp,$db);
      if ($resul==true) {
        $_SESSION['user']=$user;
      }else {
        eliminarerror($DNI,$db);
      }  
}


?>