<?php
  include('menuArticulos.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulario de Creación de Artículo</title>
  <link rel="stylesheet" type="text/css" href="css/articulo.css">
  <link rel="stylesheet" href="css/universal.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/nav.css">
</head>
<body>    
  <section class="contenedorSeccion">
    <div class="login-container">
      <h2>Formulario de Creación de Artículo</h2>

      <form action="cargarArticulo.php" method="POST">
        <label for="nombreArticulo">Nombre:</label>
        <input type="text" id="nombreArticulo" name="nombreArticulo" required>

        <label for="precio">Precio:</label>
        <input type="text" id="precioArticulo" name="precioArticulo" required>

        <button type="submit">Guardar Artículo</button>
      </form>
    </div>
  </section>
  </body>
</html>
