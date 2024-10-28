<html>
    <head>
        <title>Listado de Permisos</title>
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
                    <h2>Listado de Permisos</h2>
                    <table class="table table-success table-striped table-bordered table-hover">
                        <tr>
                            <th>
                                idPermisos
                            </th>
                            <th>
                                Reportes
                            </th>
                            <th>
                                Consultas
                            </th>
                        </tr>
                        <?php
                        $conexion=
                        mysqli_connect("localhost",
                        "root","","jennawork")
                        or die ("Error de conexión de BD");
                        $consulta=
                        "SELECT * FROM permisos";
                        $resultado=mysqli_query($conexion,$consulta);
                        while ($row=mysqli_fetch_row($resultado))
                        {
                            echo "<tr><td>".$row[0]."</td>";
                            echo "<td>".$row[1]."</td>";
                            echo "<td>".$row[2]."</td></tr>";
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