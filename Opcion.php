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
                <h2>Alta de accesos</h2>
                <?php
                    $id_control=$_POST['id_control'];
                    $idPedidos=$_POST['idPedidos'];
                    $idProductos=$_POST['idProductos'];
                    $idProveedor=$_POST['idProveedor'];
                    echo "id_control: ".$id_control."<br>";
                    echo "idPedidos: ".$idPedidos."<br>";
                    echo "idProductos: ".$idProductos."<br>"; 
                    echo "idProveedor: ".$idProveedor."<br>";                  
                    $conexion = mysqli_connect("localhost","root","","jennawork")
                    or die ("Error en la B.D.");
                    $Consulta="INSERT INTO opcion VALUES('$id_control','$idPedidos','$idProductos','$idProveedor')";
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