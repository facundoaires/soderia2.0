
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('conexion.php');
        $precio=mysqli_fetch_row(mysqli_query($conexion, "select PRECIOARTICULO from articulo where IDARTICULO = '1'"));
        echo $precio[0];
    ?> 
    
</body>
</html>