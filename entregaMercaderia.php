<?php
	include('inicio.php');
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
		 $vendedor=mysqli_query($conexion, "select  IDPERSONA , NOMBREPERSONA from persona");
		 $articulo=mysqli_query($conexion, "select IDARTICULO , DETALLEARTICULO ,PRECIOARTICULO from articulo")
	?>
	<section class="contenedorSeccion">
	<h1>Carga de mercaderia</h1>
	<hr>  
	<form action="" method="post"></form>
		<table class="cabecera">
			<tr>
				<td>
					<label for="listVendedor">Vendedor: </label>
					<select name="listVendedor" id="listVendedor" required="true">
						<option value="" selected="true"> </option>
						<?php 
							while ($vend=mysqli_fetch_array($vendedor)) {
								echo "<option value='$vend[0]'>$vend[1]</option>";
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="nroRemito">Numero de Remito: </label><input type="text" disabled="true" readonly="true"></td>
			</tr>
			<tr>
				<td><label for="fechaRemito">Fecha de Emision: </label><input type="text" disabled="true" readonly="true"></td>
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
					<td><input type="text" disabled="true" readonly="true"></label></td>
					<td><select name="articulo" id="articulo">
					<option value="" selected="true"> </option>
					<?php 
							while ($art=mysqli_fetch_array($articulo)) {
								echo "<option value='$art[0]'>$art[1]</option>";
							}
						?>
						</select>
					</td>
					<td><input type="text" id="cantidadArticulo" name="cantidadArticulo" min="1"></td>
					<td><?php  ?></td> <!-- falta terminar una banda -->
					<td><input type="submit" value="Agregar" name="botonAgregar" id="botonAgregar"></td>				
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
				<th><label for="dineroEntregado">Dinero Entregado: </label> <input type="text" min="0" id="dineroEntregado"></th>
				<th><input type="submit" value="Guardar" id="botonGuardar"><input type="submit" value="Cancelar" id="botonCancelar"></th>
			</tr>
		</table>
	</form>
	</section>	
</body>
</html>