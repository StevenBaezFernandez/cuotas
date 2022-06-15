<?php 
	//Comprovando que la sesionse inicio correctamente
	session_start();
	if (isset($_SESSION['user'])) {
		
	}else{
		header("location: login.php");
	}
	//Llamando a el script proceso.php
	require "proceso.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cuotas</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<form action="cerrar.php" method="post" class="cerrar">
		<button class="btn-cerrar" title="Cerrar la Sesion"></button>
	</form>
	<header>
		<h1>Calculo de Cuotas de Articulos a Credito</h1>
	</header>
	<div class="container-form">

		<form action="index.php" method="post">
			<h2>Completa el formulario y dale a calcular!</h2>
			<input type="text" name="nombre" placeholder="Nombre" required>
			<input type="text" name="apellido" placeholder="Apellido" required>
			<input type="text" name="articulo" placeholder="Articulo" required>
			<input type="number" name="prec-articulo" min="500" placeholder="Precio del Articulo" required>
			<input type="number" name="interes" placeholder="Porcentage de Interes" min="0" max="100" required>
			<input type="number" name="t-pagar" min="1" max="120" placeholder="Tiempo para pagar" required>
			<input type="submit" name="submit" value="Calcular">
		</form>
	</div>
	<div class="container-datos">
		<?php 
			if (isset($_POST)) {
				if (!empty($_POST)) {
					
					echo "<h2>Nombre: $nombre</h2><br>";
					echo "<h2>Apellido: $apellido</h2><br>";
					echo "<h2>Articulo Comprado: $articulo</h2><br>";
					echo "<h2>Total a Pagar: $total_pagar Pesos</h2><br>";
					echo "<h2>Pago Mensual: $pago_mensual Pesos</h2><br>";		
				}
			}

		 ?>
	</div>

	<div class="container-table">
		<table>
			
			<?php 
				//Imprimiendo la variable tabla y su cabecera
				if (isset($_POST)) {
					if (!empty($_POST)) {
						echo $header_table;
						echo $tabla;
					}
				}
				
			 ?>
		</table>
	</div>


</body>
</html>
