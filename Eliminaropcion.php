<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Archivos Bosststrap-->
    <link rel="stylesheet" href="css/css/bootstrap.css" type="text/css">
    <link href="css/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Eliminación de ventas</title>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
                <h2>Eliminación de ventas</h2>
                <?php
                    $id_control=$_POST['id_control'];
                    $conexion = mysqli_connect("localhost","root","","jennawork");
                #or die ("Error en la B.D");
                $consulta = "DELETE FROM opcion WHERE id_control='$id_control'";
                $resultado=mysqli_query($conexion, $consulta);
                if ($resultado==1)
                {
                    echo "<h3>datos Borrados</h3>";
                }
                else{
                    echo "<h3>datos no Borrados</h3>";
                }
                ?>
                <a href="Consultaopcion.php" class="btn btn-outline-primary">Consulta la Base de Datos de Ventas</a>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</body>
</html>