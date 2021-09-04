<?php
    include("../librerias/control/conexion.php");
    $con=conectar();
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $disponible=$_POST['disponible'];

    $sql="UPDATE productos SET  codigo='$codigo',nombre='$nombre',precio='$precio',descripcion='$descripcion',disponible='$disponible' WHERE codigo='$codigo'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: crud.php");
    }
?>