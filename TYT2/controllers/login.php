<?php
include("../db/conexion.php");
session_start();
if(!isset($_SESSION['user'])){
if (!isset($_POST) || empty($_POST)) { 
    require_once("../views/login.php");
    ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Travel and Time</title>
		<link rel="stylesheet" href="../views/bootstrap.min.css">
        <link rel="stylesheet" href="../estilos/login.css">
		
    </head>
    
    <body>
    <h1>LOGIN</h1>
    <form action="" method="post">
		<div>
            <div>
				User <input type="text" name="user" placeholder="user">
            </div>
            <div>
				Password <input type="password" name="password" placeholder="password">
            </div>
            </BR>
			<div><input type="submit" value="Entrar"></div>
        </div>
    </form>
		<p>¿No estas registrado aún? Pulsa en Registro.</p>
        <button><a href="registro.php">Registro</a></button>
        <button><a href="../index.php">Inicio</a></button>
    </body>
    </html>
    <?php

}else {
    $user=$_POST['user']; 
    $pass=$_POST['password'];
    include("../models/login.php");
  $comprobar=comprobar($user,$pass,$db);
    if($comprobar==true){
    $_SESSION['user']=$user;
        $chat=chat($user,$db);
    if ($chat) {
        $fp = fopen("../views/conectados.txt",'a');
        fwrite($fp, $user.PHP_EOL);
        fclose($fp);   
    }
    header("Location:../index.php");
}else {
    $value="Error al logearte vuelve a intentarlo";
    setcookie("login", $value, time()+5);
    header("Location:login.php");
}
}
}else{
    header("Location:../index.php");
}


?>