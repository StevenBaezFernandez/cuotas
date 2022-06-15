<?php 
	//Cerrando la sesion y redireccionando a login.php
	session_start();
	session_destroy();
	header("location: login.php");

 ?>