<html>
    <head>
        <!--Código para acentos y ñ -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Actualizar los Productos</title>
        <link href="css/css/bootstrap.css"
        type="text/css" rel="stylesheet">
        <title>Actualizacion de Productos</title>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-6">
                        <?php
                        $idProductos=$_POST['idProductos'];
                        $Tipo_Productos=$_POST['Tipo_Productos'];
                        $Nombre_Productos=$_POST['Nombre_Productos'];
                        $Marca=$_POST['Marca'];
                        $Descripcion_Productos=$_POST['Descripcion_Productos'];
                        $Cantidad_Productos=$_POST['Cantidad_Productos'];
                        $Precio=$_POST['Precio']; 
                        echo "idProductos: ".$idProductos."<br>";
                        echo "Tipo_Productos: ".$Tipo_Productos."<br>";
                        echo "Nombre_Productos: ".$Nombre_Productos."<br>";
                        echo "Marca: ".$Marca."<br>";
                        echo "Descripcion_Productos: ".$Descripcion_Productos."<br>";
                        echo "Cantidad_Productos: ".$Cantidad_Productos."<br>";
                        echo "Precio: ".$Precio."<br>";                    
                        $conexion = mysqli_connect("localhost","root","","jennawork") or die ("Error en la B.D.");
                        $consulta="UPDATE productos SET Tipo_Productos='$Tipo_Productos', Nombre_Productos='$Nombre_Productos', Marca='$Marca',
                        Descripcion_Productos='$Descripcion_Productos', Cantidad_Productos='$Cantidad_Productos',Precio='$Precio' WHERE idProductos='$idProductos'";
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
                         <a href="Consultaproductos.php" class="btn btn-outline-primary">
                     Consulta a la BD de Tipo de usuarios
                    </div>
                    <div class="col"></div>
                </div>

            </div>
        </body>
    </head>
</html>