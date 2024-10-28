<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conexion</title>
</head>
<body>
<?php

  try {
        $enlace = new mysqli("localhost","root","","k");
        echo "conecto";
  }
  catch(Exception $e)
  {

  }
    
        //mysqli_select_db('k',$enlace);
       // if($enlace){
         //die("no pudo conectarse ala base de datos" . mysqli_error());
        
        // echo "Conecto".$enlace;
        //}
        //echo "conexion exitosa";
        
        //mysqli_close($enlace);
        ?>
      </body>
</body>
</html>