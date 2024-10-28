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
                    $idProveedor=$_POST['idProveedor'];
                    $NombreProv=$_POST['NombreProv'];
                    $ApellidoP=$_POST['ApellidoP'];
                    $ApellidoM=$_POST['ApellidoM'];
                    $RFC_pro=$_POST['RFC_pro'];
                    $Telefono_pro=$_POST['Telefono_pro'];
                    $Correo_pro=$_POST['Correo_pro'];
                    $Dimicilio_pro=$_POST['Dimicilio_pro'];
                    echo "Nombre del proveedor: ". $NombreProv."<br>";
                    echo "Apellido Paterno: ". $ApellidoP."<br>";
                    echo "Apellido Materno: ". $ApellidoM."<br>";
                    echo "RFC: ". $RFC_pro."<br>";
                    echo "Teléfono del proveedor: ". $Telefono_pro."<br>";
                    echo "Correo: ". $Correo_pro."<br>";
                    echo "Domicilio: ". $Domicilio_pro."<br>";
                    $conexion = mysqli_connect("localhost","root","","administrador");
                    $consulta = "INSERT INTO proveedor VALUES ('$idProveedor', '$NombreProv', '$ApellidoP', '$ApellidoM', '$RFC_pro', $Telefono_pro, '$Correo_pro', '$Domicilio_pro' )";
                    $resultado=mysqli_query($conexion,$consulta);
                    if($resultado==1){
                        echo "<h3>Datos del proveedor guardados</h3>";
                    }
                    else{
                        echo "<h3>Datos del proveedor NO guardados</h3>";
                    }
                ?>
                <a href="">Consulta las Ventas</a>
            </div>
            <div class="col"></div>

        </div>
    </div>
    
</body>
</html>