<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "soderia";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$detalle = $_POST['detalle'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$entrada = $_POST['entrada'];
$salida = $_POST['salida'];

// Calcular el stock
$stock = $entrada - $salida;

// Insertar los datos en la base de datos
$sql = "INSERT INTO articulos (detalle, tipo, precio, entrada, salida, stock) VALUES ('$detalle', '$tipo', '$precio', '$entrada', '$salida', '$stock')";

if ($conn->query($sql) === TRUE) {
    echo "El artículo se ha guardado correctamente.";
} else {
    echo "Error al guardar el artículo: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
