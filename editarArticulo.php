<?php 
    include('conexion.php');

    $id=$_REQUEST['id'];
    $nombre = $_REQUEST['nombreArticulo'];
    $precio = $_REQUEST['precioArticulo'];

    $consulta=mysqli_query($conexion, "UPDATE articulo SET NOMBREARTICULO ='$nombre', PRECIOARTICULO=$precio WHERE IDARTICULO=$id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    La actualizacion se realizo con exito <br>
    <a href="informeArticulos.php">Volver</a>
</body>
</html>
?>