<?php
  include('menuArticulos.php');
  include('conexion.php');
  $id=$_REQUEST['id'];
  $articulos=mysqli_query($conexion, "SELECT * FROM articulo WHERE IDARTICULO = $id");
  $ar=mysqli_fetch_array($articulos);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Editar <?php echo $ar['NOMBREARTICULO']?></title>
  <link rel="stylesheet" type="text/css" href="css/articulo.css">
  <link rel="stylesheet" href="css/universal.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/nav.css">
</head>
<body>    
  <section class="contenedorSeccion">
    <div class="login-container">
      <h2>Editar <?php echo $ar['NOMBREARTICULO']?></h2>

      <form action="editarArticulo.php" method="POST">
        <label for="nombreArticulo">Nombre:</label>
        <input type="text" id="nombreArticulo" name="nombreArticulo" value="<?php echo $ar['NOMBREARTICULO']?>" required>

        <label for="precio">Precio:</label>
        <input type="text" id="precioArticulo" name="precioArticulo" value="<?php echo $ar['PRECIOARTICULO']?>" required>

        <input type="hidden" id="id" name="id" value="<?php echo $ar['IDARTICULO']?>" required>

        <button type="submit">Guardar</button>
      </form>
    </div>
  </section>
  </body>
</html>