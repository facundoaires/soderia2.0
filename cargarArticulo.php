<?php
    include('conexion.php');

    $nombre=$_REQUEST['nombreArticulo'];
    $precio=$_REQUEST['precioArticulo'];

    $consulta=mysqli_query($conexion, "INSERT INTO articulo(NOMBREARTICULO, PRECIOARTICULO) VALUES ('$nombre', $precio)");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga Articulo</title>
</head>
<body>
    <h1>La carga se realizo con exito</h1>
    <a href="crear_articulo.php">volver</a>
</body>
</html>