<?php
    include("../librerias/control/conexion.php");
    $con=conectar();

    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $disponible=$_POST['disponible'];


    $sql="INSERT INTO productos VALUES('$codigo','$nombre','$precio','$descripcion','$disponible')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    
    }
?>