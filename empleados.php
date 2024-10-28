<html>

<head>
    <title>Alta de empleados/clientes</title>
   
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
                <h2>Alta de empleados</h2>
                <?php
                    $idEmpleados=$_POST['idEmpleados'];
                    $Nombre=$_POST['Nombre'];
                    $Apellido_p=$_POST['Apellido_p'];
                    $Apellido_m=$_POST['Apellido_m'];
                    $Correo=$_POST['Correo'];
                    $Password=$_POST['Password'];
                    $Telefono=$_POST['Telefono'];
                    $RFC=$_POST['RFC'];
                    $idTiposEmp=$_POST['idTiposEmp'];
                    $idControl=$_POST['idControl'];
                    $idUsuario=$_POST['idUsuario'];
                    echo "idEmpleados: ".$idEmpleados."<br>";
                    echo "Nombre: ".$Nombre."<br>";
                    echo "Apellido_p: ".$Apellido_p."<br>";
                    echo "Apellido_m: ".$Apellido_m."<br>";
                    echo "Correo: ".$Correo."<br>";
                    echo "Password: ".$Password."<br>";
                    echo "Telefono: ".$Telefono."<br>";
                    echo "RFC: ".$RFC."<br>";
                    echo "idTiposEmp: ".$idTiposEmp."<br>";
                    echo "idControl: ".$idControl."<br>";
                    echo "idUsuario: ".$idUsuario."<br>";
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