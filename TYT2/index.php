<!DOCTYPE html>
<html lang="es">
<head>
    <title> Travel and Time - Inicio </title>
    <meta charset="UTF-8" name="author" content="Travel and Time">
    <link rel="stylesheet" href="estilos/index.css">
</head>

<body>
    <div class="head">
        <header>
            <h1>Travel and Time</h1>
        </header>
        <nav>
			<div class='menu'>
            <ul>
           <li><a href='index.php'>Inicio</a></li>
			<li><a href='controllers/quienessomos.php'>Quienes Somos</a></li>
          <li><a href='controllers/contactanos.php'>Contactanos</a></li>
           <li><a href='controllers/ayuda.php'>Ayuda</a></li>
           <?php
           session_start();
           if(!isset($_SESSION['user'])){
                echo " <li><a href='controllers/login.php'>Login</a></li>";
            }else {
                echo " <li><a href='controllers/cerrarsession.php'>Cerrar Sesion</a></li>";
            }
           ?>
			</ul>
			</div>
            
        </nav>
    </div>
    <main>
        <section>
            <article id="art">
			
				<div id="cal1">
				
					<img src="img/mald.jpg"></img>
					<img src="img/avionviajes.jpg"></img>
				
				</div>
				
                <div id="Calendario">
					
					<h2 id="eligeviaje">ELIGE TU VIAJE SORPRESA</h2>
					
					<div id="viaje3"><br>
					
                        <form action="controllers/next.php">
                            <a>Salida desde</a> <input type="text" name="Salida">
							<br><br>
                            <a>N de Personas</a> <input type="text" name="viajeros">
                            <br><br>
                            <a>Pack </a>
							<select>
                                <option>Low Cost</option>
                                <option>Medium Cost</option>
                                <option>High Cost</option>
                            </select>
							<br><br>
                            <input type="submit" value="GO NEXT">
                        </form>
                    </div>
					
                </div>
				
				<div id="cal2">
				
					<img src="img/col.jpg"></img>
					<img src="img/avion.jpg"></img>
				
				</div>
				
            </article>
        </section>
    </main>
    <footer>
	
	</footer>

</body>

</html>