<html>
    <head>
        <!--Código para acentos y ñ -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Actualizar a los Proveedores</title>
        <link href="css/css/bootstrap.css"
        type="text/css" rel="stylesheet">
        <title>Actualizacion de Proveedores</title>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-6">
                        <?php
                        $id_control=$_POST['id_control'];
                        $idPedidos=$_POST['idPedidos'];
                        $idProductos=$_POST['idProductos'];
                        $idProveedor=$_POST['idProveedor'];
                        echo "id_control: ".$id_control."<br>";
                        echo "idPedidos: ".$idPedidos."<br>";
                        echo "idProductos: ".$idProductos."<br>"; 
                        echo "idProveedor: ".$idProveedor."<br>";    
                        $conexion = mysqli_connect("localhost","root","","jennawork") or die ("Error en la B.D.");
                        $consulta="UPDATE proveedor SET idPedidos='$idPedidos', idProductos='$idProductos',idProveedor='$idProveedor',
                        idVentas='$idVentas' WHERE id_control='$id_control'";
                        $resultado=mysqli_query($conexion, $consulta);
                        if ($resultado==1)
                        {
                            echo "<h3>Datos del producto actualizando</h3>";
                        }
                        else
                        {
                            echo "<h3>Datos del producto no se guaradron</h3>";
                        }
                        ?>
                         <a href="Consultaopcion.php" class="btn btn-outline-primary">
                     Consulta a la BD de Tipo de usuarios
                    </div>
                    <div class="col"></div>
                </div>

            </div>
        </body>
    </head>
</html>