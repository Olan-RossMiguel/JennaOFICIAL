<html>
    <head>
        <title>Listado de Empleados</title>
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width",
initial-scale="1". shrink-to-fit="no">
<link href="/css/bootstrap-5.0.2-dist/css/bootstrap.min.css"
rel="stylesheet"
crossorigin="anonymous">
<link href="css/bootstrap-5.0.2-dist/css/bootstrap.css"
rel="stylesheet"
crossorigin="anonymous">
    </head>
    <body>
    <center>
    <div class= "container text-center">
            <div class="row">
                <div class= "col">
                    &nbsp;
                </div>
                <div class="col-6">
                    <br>
                    <h2>Listado de Empleados</h2>
                    <table class="table table-success table-striped table-bordered table-hover">
                        <tr>
                            <th>
                                idEmpleados
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Apellido Paterno
                            </th>
                            <th>
                                Apellido Materno
                            </th>
                            <th>
                                Correo
                            </th>
                            <th>
                                Contraseña
                            </th>
                            <th>
                                Genero
                            </th>
                            <th>
                                Telefono
                            </th>
                            <th>
                                RFC
                            </th>
                            <th>
                                idTipo de empleado
                            </th>
                            <th>
                                idUsuarios
                            </th>
                        </tr>
                        <?php
                        $conexion=
                        mysqli_connect("localhost",
                        "root","","jennawork")
                        or die ("Error de conexión de BD");
                        $consulta=
                        "SELECT * FROM empleados";
                        $resultado=mysqli_query($conexion,$consulta);
                        while ($row=mysqli_fetch_row($resultado))
                        {
                            echo "<tr><td>".$row[0]."</td>";
                            echo "<td>".$row[1]."</td>";
                            echo "<td>".$row[2]."</td>";
                            echo "<td>".$row[3]."</td>";
                            echo "<td>".$row[4]."</td>";
                            echo "<td>".$row[5]."</td>";
                            echo "<td>".$row[6]."</td>";
                            echo "<td>".$row[7]."</td>";
                            echo "<td>".$row[8]."</td>";
                            echo "<td>".$row[9]."</td>";
                            echo "<td>".$row[10]."</td></tr>";
                        }
                        ?>
                    </table>
                </div>
                <div class="col">
                &nbsp;
                </div>
            </div>
        </div>
        </center>
    </body>
</html>