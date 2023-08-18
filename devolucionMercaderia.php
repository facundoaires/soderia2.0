<?php
	include('menuVentas.php');
	include('conexion.php');
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
	<h1>Pago de mercaderia</h1>
	<hr>  
	<form action="cargarPago.php" method="post">
		<table class="cabecera">
			<tr>
				<td>
					Vendedor: <?php echo $_REQUEST['vendedor'] ?><input type='hidden' id='vendedor' name='vendedor' value="<?php echo $_REQUEST['vendedor'] ?>">					
				</td>
			</tr>
			<tr>
				<td>Numero de Remito: <?php echo $_REQUEST['facturaAPagar'] ?> <input type="hidden" id="IDFactura" name="IDFactura" value="<?php echo $_REQUEST['facturaAPagar'] ?>"></td>
			</tr>
			<tr>
				<td>Fecha de Emision: <?php echo $_REQUEST['fechaFactura'] ?> <input type="hidden" id="fechaFactura" name="fechaFactura" value=<?php echo $_REQUEST['fechaFactura'] ?>></td>
			</tr>
		</table>

		<table>
			<thead>
                <tr>
                    <th  colspan="4"><label for="dineroRendido">Dinero Rendido: </label></th>
                    <th> <input type="text" min="0" id="dineroRendido" name="dineroRendido"></th>
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
	</form>
	</section>	
</body>
</html>