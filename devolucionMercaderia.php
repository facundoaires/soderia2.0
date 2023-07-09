<?php
    include("inicio.php");
    include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Mercaderia<</title>
    <link rel="stylesheet" href="css/remito.css">
</head>
<body>
<section class="contenedorSeccion">
    <h1>Devolucion y Rendicion</h1>
        <hr>  
        <table class="cabecera">
            <tr>
                <td>
                    <label for="listVendedor">Vendedor: </label>
                    <select name="listVendedor" id="listVendedor">
                        <option value="Gaston">Gaston</option>
                        <option value="Emilio">Emilio</option>
                        <option value="Tobias">Tobias</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="nroRemito">Numero de Remito: </label> 1</td>
            </tr>
            <tr>
                <td><label for="fechaRemito">Fecha de Emision: </label> 13/06/2023</td>
            </tr>
        </table>

        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Accion</th>
                </tr>
                <tr>
                    <td><label for="articulo">Seleccione el articulo</label></td>
                    <td><select name="articulo" id="articulo">
                        <option value="x20">Agua X20</option>
                        <option value="x12">Agua X12</option>
                        <option value="soda">Soda</option>
                        <option value="dispenser">Dispenser</option>
                        </select>
                    </td>
                    <td><input type="text" id="cantidadArticulo" name="cantidadArticulo" min="1"></td>
                    <td>51000</td>
                    <td><input type="submit" value="Agregar"></td>				
                </tr>
                <tr>
                    <th>Codigo</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio por producto</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>1</td>
                    <td>Agua Grande</td>
                    <td>36</td>
                    <td>36000</td>
                    <td><input type="submit" value="Borrar"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Agua Chica</td>
                    <td>6</td>
                    <td>3000</td>
                    <td><input type="submit" value="Borrar"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Soda</td>
                    <td>12</td>
                    <td>12000</td>
                    <td><input type="submit" value="Borrar"></td>
                </tr>
            </tbody>
        </table>

        <table>
            <tr>
                <th><label for="dineroEntregado">Dinero Rendido: </label> <input type="text" min="0" id="dineroEntregado"></th>
                <th><input type="submit" value="Guardar" id="botonGuardar"><input type="submit" value="Cancelar" id="botonCancelar"></th>
            </tr>
        </table>
    </section>
</body>
</html>