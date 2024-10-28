<html>

<head>
    <title>Control</title>
    <link href="css/css/bootstrap.css" 
        rel="stylesheet"
            crossorigin="anonymous">
            <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <link href="css/css/bootstrap.css"
        rel="stylesheet"
        crossorigin="anonymous">
        
</head>

<body>
    <div class="container text-center">
    
        <div class="row">
            <div class="col">
            
            </div>
            <div class="col-6">
                <h2>Detalle de pedido</h2>
                <?php
                    $idDetalle_peddido=$_POST['id_control'];
                    $idProductos=$_POST['idProductos'];
                    $idPedidos=$_POST['idPedidos'];
                    echo "idDetalle_peddido: ".$idDetalle_peddido."<br>";
                    echo "idProductos: ".$idProductos."<br>"; 
                    echo "idPedidos: ".$idPedidos."<br>";               
                    $conexion = mysqli_connect("localhost","root","","jennawork")
                    or die ("Error en la B.D.");
                    $Consulta="INSERT INTO detalle_pedido VALUES('$idDetalle_peddido','$idProductos','$idPedidos')";
                    $resultado=mysqli_query($conexion,$Consulta);
                    if($resultado==1)
                    {
                        echo "<h3> datos insertados </h3>";
                    }
                    else
                    {
                        echo "<h3>datos no insertados</h3>";
                    }
                    
                ?>
                
            </div>
            <div class="col">
            
            </div>
        </div>
    </div>
    

</body>
</html>