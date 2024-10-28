<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito de compras</title>
  <link rel="stylesheet" href="estilo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
    
  <div class="container">
    <center><h1>Carrito de compras</h1></center>

    <section class="carrito">
      <h2>Productos en el carrito</h2>
      <?php

// Recibir datos del formulario

$nombre = $_POST['nombre_producto']; // Assuming your form field name is 'nombre_producto'
$precio = $_POST['precio_producto'];  // Assuming your form field name is 'precio_producto'
$cantidad = $_POST['cantidad_producto']; // Assuming your form field name is 'cantidad_producto'
echo "Nombre del producto".$nombre;

// Procesar y validar datos (opcional)

// Preparar información para la tabla
$tabla = "<table>";
$tabla .= "<tr><th>Nombre</th><th>Correo electrónico</th><th>Producto</th></tr>";
$tabla .= "<tr><td>$nombre</td><td></td><td></td></tr>";
$tabla .= "</table>";

// Imprimir HTML de la tabla
echo $tabla;
?>


      <div class="resumen-pedido">
<!--         <p>Subtotal: $<span id="subtotal">0.00</span></p>
 -->       
        <h3>Total: $<span id="total">500></h3>
      </div>

      <div class="botones-accion">
        <button type="button" class="btn btn-primary">Vaciar carrito</button>
        <button type="button" class="btn btn-success">Finalizar compra</button>
      </div>
    </section>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

