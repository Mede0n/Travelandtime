<!DOCTYPE html>
<html lang="es">

<head>
    <title> Travel and Time - Quienes somos </title>
    <meta charset="UTF-8" name="author" content="Travel and Time">

    <link rel="stylesheet" href="../estilos/index.css">
    <link rel="stylesheet" href="../estilos/quienessomos.css">
	
</head>

<body>
    <div class="head">
        <header>
            <h1>Travel and Time</h1>
        </header>
        <nav>
           <div class='menu'>
           <ul><li><a href='../index.php'>Inicio</a></li>
           <li><a href='contactanos.php'>Contactanos</a></li>
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
                <div id="Quienes">
                    <br>
                    <p>Muy buenas a tod@s.</p>
					<p>Os damos la bienvenida a nuestro proyecto final de curso. Somos David Pérez y Fco.Javier Escudero, dos alumnos del Grado Superior de Desarrollo de Aplicaciones Web. Espero que disfrutéis de esta nuestra página web, y valoréis el esfuerzo y dedicación aportados. </p>
					
                </div>
            </article>
        </section>
    </main>
    <footer>

    </footer>

</body>

</html>