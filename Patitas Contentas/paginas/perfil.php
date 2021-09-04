<?php
	session_start();
	if (isset($_SESSION['usuario'])){
		echo "";

	}else{
		header("Location: index.html");
		exit();
	}
header("Location: .$paginas/crud.php");