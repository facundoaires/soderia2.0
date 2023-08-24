<?php
include ('conexion.php');

//ultimo ID insertado
$consultaID="SELECT MAX(IDPAGOFACTURA) AS ultimo_id FROM pagofactura";
$ultimoID=mysqli_query($conexion, $consultaID);
$row = mysqli_fetch_assoc($ultimoID);
$lastId = $row['ultimo_id'];

$dineroRendido=$_REQUEST['dineroRendido'];

$cantAguaX20=$_REQUEST["cantAguaGrande"];
$precioAguaX20=$_REQUEST["precioAguaX20"];

$cantAguaX12=$_REQUEST["cantAguaChica"];
$precioAguaX12=$_REQUEST["precioAguaX12"];

$cantSoda=$_REQUEST["cantSoda"];
$precioSoda=$_REQUEST["precioSoda"];

$cantDispenser=$_REQUEST["cantDispenser"];
$precioDispenser=$_REQUEST["precioDispenser"];

$totalPagoFactura= $dineroRendido + $cantAguaX20*$precioAguaX20 + $cantAguaX12*$precioAguaX12 + $cantSoda*$precioSoda + $cantDispenser*$precioDispenser;

$IDFACTURA=$_REQUEST['IDFactura'];
$consultaFactura=mysqli_query($conexion, "select IDPERSONA, IDFACTURA  from factura where IDFACTURA=$IDFACTURA");
$factura=mysqli_fetch_array($consultaFactura);

$cabecera=mysqli_query($conexion, "INSERT INTO pagofactura(IDPAGOFACTURA, IDPERSONA, IDFACTURA, TOTALPAGOFACTURA) VALUES ($lastId+1, $factura[0], $factura[1], $totalPagoFactura)");
$cabeceraPago=mysqli_query($conexion, "UPDATE factura SET IDPAGOFACTURA = $lastId+1 WHERE IDFACTURA = $IDFACTURA");


$detalle=mysqli_query($conexion, "INSERT INTO detallepagofactura(IDPAGOFACTURA, IDARTICULO, CANTIDADARTICULOPAGO, PRECIOARTICULOPAGO) VALUES ($lastId+1, 1, $cantAguaX20, $cantAguaX20 * $precioAguaX20)");
$detalle=mysqli_query($conexion, "INSERT INTO detallepagofactura(IDPAGOFACTURA, IDARTICULO, CANTIDADARTICULOPAGO, PRECIOARTICULOPAGO) VALUES ($lastId+1, 2, $cantAguaX12, $cantAguaX12 * $precioAguaX12)");
$detalle=mysqli_query($conexion, "INSERT INTO detallepagofactura(IDPAGOFACTURA, IDARTICULO, CANTIDADARTICULOPAGO, PRECIOARTICULOPAGO) VALUES ($lastId+1, 3, $cantSoda, $cantSoda * $precioSoda)");
$detalle=mysqli_query($conexion, "INSERT INTO detallepagofactura(IDPAGOFACTURA, IDARTICULO, CANTIDADARTICULOPAGO, PRECIOARTICULOPAGO) VALUES ($lastId+1, 4, $cantDispenser, $cantDispenser * $precioDispenser)");

mysqli_close($conexion);

    header("location: informePendientesPago.php");
    exit;
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
    <a href="informePendientesPago.php">volver</a>
</body>
</html>