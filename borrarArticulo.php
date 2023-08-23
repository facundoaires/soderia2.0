<?php
    include('conexion.php');

    $id=$_REQUEST['id'];
    $consulta=mysqli_query($conexion, "DELETE FROM articulo WHERE IDARTICULO=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="informeArticulos.php">Volver</a>
</body>
</html>