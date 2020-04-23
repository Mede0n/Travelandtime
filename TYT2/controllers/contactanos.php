<!DOCTYPE html>
<html lang="es">
<head>
    <title> Travel and Time - Contactanos </title>
    <meta charset="UTF-8" name="author" content="Travel and Time">

    <link rel="stylesheet" href="../estilos/index.css">
    <link rel="stylesheet" href="../estilos/contactanos.css">
</head>

<body>
    <div class="head">
        <header>
            <h1>Travel and Time</h1>
        </header>
        <nav>
			<div class='menu'>
            <ul><li><a href='../index.php'>Inicio</a></li>
            <li><a href='quienessomos.php'>Quienes Somos</a></li>
            <li><a href='ayuda.php'>Ayuda</a></li>
            <?php
           session_start();
           if(!isset($_SESSION['user'])){
                echo " <li><a href='login.php'>Login</a></li>";
            }else {
                echo " <li><a href='cerrarsession.php'>Cerrar Sesion</a></li>";
            }
           ?>
			</ul>
			</div>
        </nav>
    </div>
    <main>
        <section>
            <article>
                <div id="Contactanos">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12157.588797534801!2d-3.7640795!3d40.3778886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e27f9f907f91d18!2sIES%20Leonardo%20Da%20Vinci!5e0!3m2!1ses!2ses!4v1581582361847!5m2!1ses!2ses"
                 width="450px" height="400px" ></iframe>
                 <div id="info">
                telefono de contacto : 600000000
                <br>
                email : tupapasito24@gmail.com
                </div>
                </div>
            
            </article>
        </section>
    </main>
    <footer>
    <a  href="https://twitter.com/" target="_blank"><img src="../img/twitter.png"></img></a>
    <a  href="https://instagram.com/" target="_blank"><img src="../img/instagram.png"></img></a>
    <a  href="https://facebook.com/" target="_blank"><img src="../img/facebook.jpg"></img></a>
    </footer>

</body>

</html>