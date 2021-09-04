<?php 
    include("../librerias/control/conexion.php");
    $con=conectar();
    $codigo=$_GET['codigo'];

    $sql="SELECT * FROM productos WHERE codigo='$codigo'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>

<html lang="es">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modificar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>

    <body>
        <div class="container mt-5">

            <form action="update.php" method="POST">
                <input type="hidden" name="codigo" value="<?php echo $row['codigo']  ?>">
                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                <input type="number" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
                <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripción" value="<?php echo $row['descripcion']  ?>">
                <input type="number" class="form-control mb-3" name="disponible" placeholder="Disponible" value="<?php echo $row['disponible']  ?>">
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>       
        </div>
    </body>
</html>