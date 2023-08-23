<!DOCTYPE html>
<html>
<head>

    <?php 
        include('menuUsuarios.php');
        include('conexion.php');
    ?>

    <title>Formulario de Cliente</title>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="css/persona.css">
    
    <script>
        function toggleCheckbox(checkboxId) { //permite seleccionar solo un checkbox a la vez
            var checkboxes = document.getElementsByName('tipo_persona');
            checkboxes.forEach(function(checkbox) {
                if (checkbox.id !== checkboxId) {
                    checkbox.checked = false;
                }
            });
        }
    
    </script>
</head>
<body>
    <section class="contenedorSeccion"></section>
        <h2>Formulario de Cliente</h2>
        <form action="cargarPersona.php" method="post">
            <label for="nombre">Nombre de persona:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="cuil">CUIL de persona:</label>
            <input type="text" id="cuil" name="cuil"><br><br>

            <label for="domicilio">Domicilio de persona:</label>
            <input type="text" id="domicilio" name="domicilio"><br><br>

            <label for="telefono">Teléfono de persona:</label>
            <input type="text" id="telefono" name="telefono"><br><br>

            <label>Tipo de persona:</label><br>
            <input type="radio" id="tipoCliente" name="tipoPersona" value="8">
            <label for="tipoCliente">Cliente</label><br>

            <input type="radio" id="tipoVendedor" name="tipoPersona" value="7">
            <label for="tipoVendedor">Vendedor</label><br><br>

            <label for="username">Usuario:</label>
            <input type="text" name="username" id="username">

            <label for="password">Contraseña:</label>
            <input type="password" name="password">

            <label for="password">Confirmar contraseña:</label>
            <input type="password" name="confirm_password">

            <input type="submit" value="Guardar">
        </form>
    </section>
</body>
</html>