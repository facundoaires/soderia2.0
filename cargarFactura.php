<?php
    include("conexion.php");
    
    $vendedor=$_REQUEST["listVendedor"];
    $fechaActual=$_REQUEST["fechaFactura"];

    $cantAguaX20=$_REQUEST["cantAguaGrande"];
    $precioAguaX20=$_REQUEST["precioAguaX20"];

    $cantAguaX12=$_REQUEST["cantAguaChica"];
    $precioAguaX12=$_REQUEST["precioAguaX12"];

    $cantSoda=$_REQUEST["cantSoda"];
    $precioSoda=$_REQUEST["precioSoda"];

    $cantDispenser=$_REQUEST["cantDispenser"];
    $precioDispenser=$_REQUEST["precioDispenser"];

    $totalFactura= $cantAguaX20*$precioAguaX20 + $cantAguaX12*$precioAguaX12 + $cantSoda*$precioSoda + $cantDispenser*$precioDispenser;

    $cabecera=mysqli_query($conexion, "INSERT INTO factura(IDPERSONA, FECHAFACTURA, TOTALFACTURA) VALUES ($vendedor, $fechaActual, $totalFactura)");

    //ultimo ID insertado
    $consultaID="SELECT MAX(IDFACTURA) AS ultimo_id FROM factura";
    $ultimoID=mysqli_query($conexion, $consultaID);
    $row = mysqli_fetch_assoc($ultimoID);
    $lastId = $row['ultimo_id'];


    $detalle=mysqli_query($conexion, "INSERT INTO detallefactura(IDFACTURA, IDARTICULO, CANTIDADARTICULO, PRECIOTOTALARTICULO) VALUES ($lastId, 1, $cantAguaX20, $cantAguaX20 * $precioAguaX20)");
    $detalle=mysqli_query($conexion, "INSERT INTO detallefactura(IDFACTURA, IDARTICULO, CANTIDADARTICULO, PRECIOTOTALARTICULO) VALUES ($lastId, 2, $cantAguaX12, $cantAguaX12 * $precioAguaX12)");
    $detalle=mysqli_query($conexion, "INSERT INTO detallefactura(IDFACTURA, IDARTICULO, CANTIDADARTICULO, PRECIOTOTALARTICULO) VALUES ($lastId, 3, $cantSoda, $cantSoda * $precioSoda)");
    $detalle=mysqli_query($conexion, "INSERT INTO detallefactura(IDFACTURA, IDARTICULO, CANTIDADARTICULO, PRECIOTOTALARTICULO) VALUES ($lastId, 4, $cantDispenser, $cantDispenser * $precioDispenser)");

    mysqli_close($conexion);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga factura</title>
</head>
<body>
    <h1>La carga se realizo con exito</h1>
    <a href="entregaMercaderia.php">volver</a>
</body>
</html>