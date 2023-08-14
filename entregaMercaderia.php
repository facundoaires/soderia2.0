<?php
	include ('inicio.php');
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
	<?php
		 $vendedor=mysqli_query($conexion, "select  IDPERSONA , NOMBREPERSONA from persona");/*Busca id y nombre de los vendedores*/
		 $articulo=mysqli_query($conexion, "select IDARTICULO , NOMBREARTICULO ,PRECIOARTICULO from articulo");/*Busca los datos de los articulos*/		  
	?>
	<section class="contenedorSeccion">
	<h1>Carga de mercaderia</h1>
	<hr>  
	<form action="cargarFactura.php" method="post">
		<table class="cabecera">
			<tr>
				<td>
					<label for="listVendedor">Vendedor: </label>
					<select name="listVendedor" id="listVendedor" required="true">
						<option value="" selected="true"> </option>
						<?php 
							while ($vend=mysqli_fetch_array($vendedor)) {
								echo "<option value='$vend[0]'>$vend[1]</option>"; // [0]=idvendedor [1]=nombrevendedor
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="nroRemito">Numero de Remito: </label><input type="text" id="IDFactura" name="IDFactura" disable="true" readonly="true" value="<?php echo $lastId+1 ?>"></td>
			</tr>
			<tr>
				<td><label for="fechaRemito">Fecha de Emision: </label><input type="text" id="fechaFactura" name="fechaFactura" disable="true" readonly="true" value="<?php echo $fechaActual ?>"></td>
			</tr>
		</table>

		<table>
			<thead>
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
					<td><input type="number" id="cantAguaGrande" name="cantAguaGrande" min="1"></td>
					<td><?php $precioAguaX20=$precio=mysqli_fetch_row(mysqli_query($conexion, "select PRECIOARTICULO from articulo where IDARTICULO = '1'"));
						echo "<input type='text' id='precioAguaX20' name='precioAguaX20' disable=true readonly=true value=$precioAguaX20[0]>"; ?></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Agua Chica</td>
					<td><input type="number" id="cantAguaChica" name="cantAguaChica" min="1"></td>
					<td><?php $precioAguaX12=$precio=mysqli_fetch_row(mysqli_query($conexion, "select PRECIOARTICULO from articulo where IDARTICULO = '2'"));
					    echo "<input type='text' id='precioAguaX12' name='precioAguaX12' disable=true readonly=true value=$precioAguaX12[0]>" ?></td>
				</tr>
				<tr>
					<td>3</td>
					<td>Soda</td>
					<td><input type="number" id="cantSoda" name="cantSoda" min="1"></td>
					<td><?php $precioSoda=$precio=mysqli_fetch_row(mysqli_query($conexion, "select PRECIOARTICULO from articulo where IDARTICULO = '3'")); 
						echo "<input type='text' id='precioSoda' name='precioSoda' disable=true readonly=true value=$precioSoda[0]>" ?></td>
				</tr>
				<tr>
					<td>4</td>
					<td>Dispenser</td>
					<td><input type="number" id="cantDispenser" name="cantDispenser" min="0"></td>
					<td><?php $precioDispenser=$precio=mysqli_fetch_row(mysqli_query($conexion, "select PRECIOARTICULO from articulo where IDARTICULO = '4'")); 
						echo "<input type='text' id='precioDispenser' name='precioDispenser' disable=true readonly=true value='$precioDispenser[0]'>";?>
					</td>
					<td>
						<input type="submit">
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
		
	</form>
	</section>	
</body>
</html>