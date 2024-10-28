<html>

<head>
    <title>Productos</title>
   
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
                <h2>Alta de productos</h2>
                <?php
                    $idProductos=$_POST['idProductos'];
                    $Tipo_Productos=$_POST['Tipo_Productos'];
                    $Nombre_Productos=$_POST['Nombre_Productos'];
                    $Marca=$_POST['Marca'];
                    $Descripcion_Productos=$_POST['Descripcion_Productos'];
                    $Cantidad_Productos=$_POST['Password'];
                    $Precio=$_POST['Telefono'];
                    
                    echo "idEmpleados: ".$idEmpleados."<br>";
                    echo "Nombre: ".$Nombre."<br>";
                    echo "Apellido_p: ".$Apellido_p."<br>";
                    echo "Apellido_m: ".$Apellido_m."<br>";
                    echo "Correo: ".$Correo."<br>";
                    echo "Password: ".$Password."<br>";
                    echo "Telefono: ".$Telefono."<br>";
                    echo "RFC: ".$RFC."<br>";
                    
                    $conexion = mysqli_connect("localhost","root","","jennawork")
                    or die ("Error en la B.D.");
                    $Consulta="INSERT INTO empleados VALUES('$idEmpleados','$Nombre','$Apellido_p','$Apellido_m','$Correo',
                    '$Password','$Telefono','$RFC','$idTiposEmp','$idControl','$idUsuario')";
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