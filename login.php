<?php 
	session_start();
	//Comprovanso que exista la variable post
	if (isset($_POST)) {
		//Comprovando que la variable post no este vacia
		if (!empty($_POST)) {
			//Declarando las variable del usuario
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			//Comprovando que las variables del usuario sean igual a la del sistema
			if ($user == "admin" and $pass == "1234") {
				//Creando la variable de sesion user y redireccionando a index.php
				$_SESSION['user'] = "admin";
				header("location: index.php");
			}else{
				//En caso de que la contraseña o el usuario sean incorrectos
				$error = "Contraseña o Usuario Incorrecto!";
			}
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style type="text/css">
		body{
			background: #f2f2f2;
		}
		.error{
			width: 50%;
			padding: 20px;
			text-align: center;
			margin:auto;
		}
	</style>
</head>
<body>
	<div class="container-form-login">
		<div class="left">
			<h2>Login</h2>
		</div>
		<form action="login.php" method="post">
			<input type="text" name="user" placeholder="Usuario" required>
			<input type="password" name="pass" placeholder="Contraseña" required>
			<input type="submit" name="submit" value="Login >>">
		</form>
	</div>
	<div class="error">
		<p>
			<?php 
				//Si existe la variable post
				if (isset($_POST)) {
					//Si la variable post no esta vacia
					if (!empty($_POST)) {
						//Imprime el mensaje de error
						echo $error;
					}
				}

			 ?>
		</p>
	</div>


</body>
</html>