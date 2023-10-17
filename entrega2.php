<?php
	include('menuVentas.php');
	include('conexion.php');
	
	//ultimo idfactura
	$consultaID="SELECT MAX(IDFACTURA) AS ultimo_id FROM factura";
    $ultimoID=mysqli_query($conexion, $consultaID);
    $row = mysqli_fetch_assoc($ultimoID);
    $lastId = $row['ultimo_id'];

	$fechaActual = date("Y-m-d");
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="css/remito.css">
	<meta charset="utf-8">
</head>
<body>
	<section class="contenedorSeccion">
		<h1>Entrega de mercaderia al repartidor</h1>
		<hr>  
	
		<table class="cabecera">
			<tr>
				<td id="vendedorDiv">
					<input type="text" id="inputVendedor" placeholder="Vendedor">
				</td>
			</tr>
            <tr>
                <td>
					<div id="resultadoDiv"></div>
                </td>
            </tr>
			<tr>
				<td><label for="nroRemito">Numero de Remito: <?php echo $lastId+1 ?></label><input type="hidden" id="IDFactura" name="IDFactura" disable="true" readonly="true" value="<?php echo $lastId+1 ?>"></td>
			</tr>
			<tr>
				<td><label for="fechaRemito">Fecha de Emision: <?php echo $fechaActual ?></label><input type="hidden" id="fechaFactura" name="fechaFactura" disable="true" readonly="true" value="<?php echo $fechaActual ?>"></td>
			</tr>
		</table>

		<table id="detalleTabla">
			<thead>
				<tr>
					<th><input type="text" id="inputProducto"></th>
					<th>Nombre</th>
					<th>Codigo</th>
					<th>Precio por producto</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody id="detalleList">
				<tr>
					<td>
						<div id="results"></div>
					</td>
				</tr>		
			</tbody>
		</table>
		<table>
			<tr>
				<th><label for="dineroEntregado">Dinero Entregado: </label> <input type="text" min="0" id="dineroEntregado" name="dineroEntregado"></th>
				<th></th>
			</tr>
		</table>
	
    
	</section>	

	<script src="entrega2.js"></script>
	<script src="searchArticulo.js"></script>
</body>
</html>