<?php
	$db='patitas_contentas';
	$con=mysql_connect('localhost','root','') or die('Problema con la conexion');
	mysql_select_db($db,$con)or die('Problema con la base de datos');
	function conectar(){
		$host="localhost";
		$user="root";
		$pass="";
	
		$bd="patitas_contentas";
	
		$con=mysqli_connect($host,$user,$pass);
	
		mysqli_select_db($con,$bd);
	
		return $con;
	}
?>