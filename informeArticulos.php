<?php
    include('conexion.php');
    include('menuArticulos.php');
    $articulos=mysqli_query($conexion, 'SELECT IDARTICULO, NOMBREARTICULO, PRECIOARTICULO from articulo');    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Articulos</title>
    <link rel="stylesheet" href="css/remito.css">
    <link rel="stylesheet" href="css/universal.css">
</head>
<body>
    <section class="contenedorSeccion">
        <table>
		    <thead>
                <tr>
                    <th>IDArticulo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th colspan='2'>Accion</th>
                </tr>
            </thead>
            <tbody>                    
            <?php                
                while ($art=mysqli_fetch_array($articulos)){
            ?>
                <tr>
                    <td><?php echo $art['IDARTICULO'] ?></td>
                    <td><?php echo $art['NOMBREARTICULO'] ?></td>
                    <td><?php echo $art['PRECIOARTICULO'] ?></td>
                    <td><a href="formularioEditarArticulos.php?id='<?php echo $art['IDARTICULO'] ?>'">Editar</a></td>
                    <td><a href="borrarArticulo.php?id='<?php echo $art['IDARTICULO'] ?>'">Borrar</a></td>
                </tr> 
            <?php } ?>                                       
            </tbody>
        </table>
    </section> 
</body>
</html>