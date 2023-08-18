<?php
    include('menuVentas.php');
    include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercaderia pendiente de pago</title>
    <link rel="stylesheet" href="css/remito.css">
    <link rel="stylesheet" href="css/universal.css">
</head>
<body>
    <section class="contenedorSeccion">
        <h1>Informe pendiente pago</h1>
        <?php
            $FacturaSinPagar=mysqli_query($conexion, "select * from factura inner join persona on factura.IDPERSONA = persona.IDPERSONA");
        ?>
        <table>
		    <thead>
                <tr>
                    <th>ID Factura</th>
                    <th>Vendedor</th>
                    <th>Fecha</th>
                    <th>Total Factura</th>
                </tr>
            </thead>
            <tbody>                    
            <?php                
                while ($rem=mysqli_fetch_array($FacturaSinPagar)) {
            ?>
                <tr>
                    <?php if (! $rem['IDPAGOFACTURA']) { ?>
                        <form action='devolucionMercaderia.php' method='get'>
                        <td><?php echo $rem['IDFACTURA'] ?><input type='hidden' id='facturaAPagar' name='facturaAPagar' value="<?php echo $rem['IDFACTURA'] ?>"></td>
                        <td><?php echo $rem['NOMBREPERSONA'] ?><input type='hidden' id='vendedor' name='vendedor' value="<?php echo $rem['NOMBREPERSONA'] ?>"></td>
                        <td><?php echo $rem['FECHAFACTURA'] ?><input type='hidden' id='fechaFactura' name='fechaFactura' value="<?php echo $rem['FECHAFACTURA'] ?>"></td>
                        <td><?php echo $rem['TOTALFACTURA'] ?><input type='hidden' id='totalFactura' name='totalFactura' value="<?php echo $rem['TOTALFACTURA'] ?>"></td>
                        <td><input type='submit' value='Pagar'></td>
                    </form>
                </tr>                      
            <?php }
                    } ?>                   
            </tbody>
        </table>   
    </section>   
</body>
</html>