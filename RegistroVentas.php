<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización de productos</title>
    <link href="css/bootstrap-5.0.2-dist/css/bootstrap.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <?php
                    $idVentas=$_POST['idVentas'];
                    $Cantidad_v=$_POST['Cantidad_v'];
                    $total=$_POST['total'];
                    $fecha=$_POST['fecha'];
                    $idProducto=$_POST['idProducto'];
                    $idCliente=$_POST['idCliente'];
                    echo "Cantidad_v: ". $Cantidad_v."<br>";
                    echo "total: ". $total."<br>";
                    echo "fecha: ". $fecha."<br>";
                    echo "idProducto: ". $idProducto."<br>";
                    echo "idCliente: ". $idCliente."<br>";
                    $conexion = mysqli_connect("localhost","root","","administrador");
                    $consulta = "INSERT INTO ventas VALUES ('$idVentas', $Cantidad_v, $total, '$fecha', '$idProducto', '$idCliente' )";
                    $resultado=mysqli_query($conexion,$consulta);
                    if($resultado==1){
                        echo "<h3>Datos de la venta guardados</h3>";
                    }
                    else{
                        echo "<h3>Datos de la venta no guardados</h3>";
                    }
                ?>
                <a href="ConsultasVentas.php">Consulta las Ventas</a>
            </div>
            <div class="col"></div>

        </div>
    </div>
    
</body>
</html>