<?php

    include("../librerias/control/conexion.php");
    $con=conectar();

    $codigo=$_GET['codigo'];

    $sql="DELETE FROM productos  WHERE codigo='$codigo'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }
?>
