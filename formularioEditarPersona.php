<?php
    include('conexion.php');
    include('menuUsuarios.php');

    $id=$_GET['id'];
    echo $id;
    $persona=mysqli_query($conexion, "SELECT * from persona WHERE IDPERSONA = $id");
    $per=mysqli_fetch_array($persona);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
    <link rel="stylesheet" href="css/persona.css">
</head>
<body>
    <section class="contenedorSeccion"></section>
        <h2>Editar a: <?php echo $per['NOMBREPERSONA']?></h2>

        <form action="editarPersona.php" method="get">
            <label for="nombre">Nombre de persona:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $per['NOMBREPERSONA']?>"  ><br><br>

            <label for="cuil">CUIL de persona:</label>
            <input type="text" id="cuil" name="cuil" value="<?php echo $per['CUILPERSONA']?> "><br><br>

            <label for="domicilio">Domicilio de persona:</label>
            <input type="text" id="domicilio" name="domicilio" value="<?php echo $per['DOMICILIOPERSONA']?>"><br><br>

            <label for="telefono">Teléfono de persona:</label>
            <input type="text" id="telefono" name="telefono" value="<?php echo $per['TELEFONOPERSONA']?>"><br><br>

            <label>Tipo de persona:</label><br>
            <input type="radio" id="tipoCliente" name="tipoPersona" value="8" <?php if ($per['IDCATEGORIAPERSONA'] == 8) {echo 'checked';} ?>>
            <label for="tipoCliente">Cliente</label><br>

            <input type="radio" id="tipoVendedor" name="tipoPersona" value="7" <?php if ($per['IDCATEGORIAPERSONA'] == 7) {echo 'checked';} ?>> 
            <label for="tipoVendedor">Vendedor</label><br><br>

            <label for="username">Usuario:</label>
            <input type="text" name="username" id="username" value="<?php echo $per['USUARIOPERSONA']?>">

            <label for="password">Contraseña:</label>
            <input type="password" name="password">

            <label for="password">Confirmar contraseña:</label>
            <input type="password" name="confirm_password">
            
            <input type="hidden" name="id" value="<?php echo $id ?>">

            <input type="submit" value="Guardar">
        </form>
    </section>
</body>
</html>