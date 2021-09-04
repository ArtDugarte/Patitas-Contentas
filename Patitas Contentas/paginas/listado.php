<?php 
    include("../librerias/control/conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM productos ORDER BY codigo ASC";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Patitas Contentas - Contacto</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Spectral:wght@400;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/lista.css">

        <!-- LOGO -->
        <link rel="shortcut icon" href="../imagenes/logo.png" type="image/x-icon">
    </head>

<body>

    <header class="site-header" id="header">
        <div class="contenedor">
            <div class="barra">
                <a href="index.html">
                    <!--Para volver al index-->
                    <h1 class="no-margin">Patitas <span>Contentas</span></h1>
                </a>
                <nav class="navegacion">
                    <a href="listado.php">Productos</a>
                    <a href="contacto.html">Contacto</a>
                    <a href="login.html">Iniciar Sesión</a>
                </nav>
            </div>
            <!--Barra-->

            <div class="texto-header">
                <h2 class="no-margin">"Un Paraiso para las Mascotas"</h2>
            </div>
        </div>
        <!--Contenedor-->
    </header>

    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >

                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Disponible</th>
                </tr>

            </thead>

            <tbody>

                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                                 
                <tr>
                    <th><?php  echo $row['codigo']?></th>
                    <th><?php  echo $row['nombre']?></th>
                    <th><?php  echo $row['precio']?></th>
                    <th><?php  echo $row['descripcion']?></th>
                    <th><?php  echo $row['disponible']?></th>                                        
                </tr>

                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
    

    <div class="site-footer">
        <div class="contenedor">
            <div class="barra">
                <a href="#header"><p class="no-margin">Patitas <span>Contentas</span></p></a>
                <nav class="navegacion">
                    <a href="listado.php">Productos</a>
                    <a href="contacto.html">Contacto</a>
                    <a href="login.html">Iniciar Sesión</a>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>