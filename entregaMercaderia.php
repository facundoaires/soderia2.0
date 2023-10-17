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

	<script>
		function agregarFila() {
  			// Obtén la tabla por su id
  			var tabla = document.getElementById("detalleTabla");
  			// Crea una nueva fila y dos celdas
  			var fila = tabla.insertRow();
  			var celda1 = fila.insertCell(0);
  			var celda2 = fila.insertCell(1);
			var celda3 = fila.insertCell(2);
			var celda4 = fila.insertCell(3);
			var celda5 = fila.insertCell(4);
  			//Agrega contenido a las celdas
  			celda1.innerHTML = "Codigo";
			celda2.innerHTML = "Producto";
  			celda3.innerHTML = "Cantidad";
			celda4.innerHTML = "Precio";
			celda5.innerHTML = "Accion";			
		}	

		
	</script>
</head>
<body>
	<?php
		 $vendedor=mysqli_query($conexion, "select  IDPERSONA , NOMBREPERSONA from persona");/*Busca id y nombre de los vendedores*/
		 $articulo=mysqli_query($conexion, "select IDARTICULO , NOMBREARTICULO ,PRECIOARTICULO from articulo");/*Busca los datos de los articulos*/		  
	?>
	<section class="contenedorSeccion">
	<h1>Entrega de mercaderia al repartidor</h1>
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
				<td><label for="nroRemito">Numero de Remito: <?php echo $lastId+1 ?></label><input type="hidden" id="IDFactura" name="IDFactura" disable="true" readonly="true" value="<?php echo $lastId+1 ?>"></td>
			</tr>
			<tr>
				<td><label for="fechaRemito">Fecha de Emision: <?php echo $fechaActual ?></label><input type="hidden" id="fechaFactura" name="fechaFactura" disable="true" readonly="true" value="<?php echo $fechaActual ?>"></td>
			</tr>
		</table>

		<table id="detalleTabla">
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
							
			</tbody>
		</table>
		<table>
			<tr>
				<th><label for="dineroEntregado">Dinero Entregado: </label> <input type="text" min="0" id="dineroEntregado" name="dineroEntregado"></th>
				<th></th>
			</tr>
		</table>
	</form>
	<button onclick="agregarFila()">Agregar fila</button><br>
	<button onclick="agregarBloque()">Agregar bloque</button>
	</section>	
</body>
</html>