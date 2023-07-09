<?php
// Establecer la conexión con la base de datos
$servername = "localhost"; // Cambia esto si tu base de datos está en otro servidor
$username = "root";
$password = "";
$dbname = "soderia";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los valores del formulario
$nombre = $_POST['nombre'];
$cuil = $_POST['cuil'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];
$localidad = $_POST['localidad'];
$provincia = $_POST['provincia'];
$es_cliente = isset($_POST['es_cliente']) ? 1 : 0;
$es_vendedor = isset($_POST['es_vendedor']) ? 1 : 0;

// Insertar los datos en la base de datos
$sql = "INSERT INTO clientes (nombre, cuil, domicilio, telefono, localidad, provincia, es_cliente, es_vendedor)
        VALUES ('$nombre', '$cuil', '$domicilio', '$telefono', '$localidad', '$provincia', '$es_cliente', '$es_vendedor')";

if ($conn->query($sql) === TRUE) {
    echo "Cliente guardado exitosamente.";
    // Si es vendedor, redirigir a otro HTML para la creación de usuario
    if ($es_vendedor) {
        header("Location: crear_usuario.html");
        exit();
    }
} else {
    echo "Error al guardar el cliente: " . $conn->error;
}

// Cerrar la conexión con la base de datos
$conn->close();
?>
