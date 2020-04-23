<?php
session_start();
if(!isset($_SESSION['user'])){
    $value="Para continuar y comprar tu viaje logeate";
    setcookie("login", $value, time()+5);
                header("Location:login.php");
            }else {
                echo "hola";
            }
            ?>