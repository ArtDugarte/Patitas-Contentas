<?php
	include('conexion.php');
	if (isset($_POST['login'])){

		$usuario = $_POST['txtusuario'];
		$pass = $_POST['txtpass'];

		if (empty($usuario) | empty($pass)){
			header("Location: ../../index.html");
			exit();
		}
		$sql = mysql_query("SELECT * from usuario where usuario = '$usuario' and clave = '$pass' ");
		if ($row = mysql_fetch_array($sql)){
			session_start();
			$_SESSION['usuario'] = $usuario;
			header("Location: ../../paginas/perfil.php");

		}else{
			header("Location: ../../paginas/index.html");
			exit();
		}
	}
?>