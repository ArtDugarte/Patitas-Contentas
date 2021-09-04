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
        <title>Productos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">   
    </head>

    <body>

        <header>

            <a href="index.html" class="btn btn-danger">Cerrar Sesión</a>

        </header>

        <div class="container mt-5">
            <div class="row"> 
                        
                <div class="col-md-3">
                    <h1>Crear Producto</h1>
                        <form action="insertar.php" method="POST">

                            <input type="text" class="form-control mb-3" name="codigo" placeholder="Código">
                            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                            <input type="number" class="form-control mb-3" name="precio" placeholder="Precio">
                            <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripción">
                            <input type="number" class="form-control mb-3" name="disponible" placeholder="Disponible">
                            <input type="submit" class="btn btn-primary">
                        </form>
                </div>

                <div class="col-md-8">
                    <table class="table" >
                        <thead class="table-success table-striped" >

                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Descripción</th>
                                <th>Disponible</th>
                                <th></th>
                                <th></th>
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
                                <th><a href="actualizar.php?codigo=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?codigo=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                            </tr>

                            <?php 
                                }
                            ?>
                            </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </body>
</html>