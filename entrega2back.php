<?php
$host_db = "localhost";
$nombre_db = "soderia2.0";
$usuario_db = "root";
$contrasena_db = "";

// Realizar una conexión a la base de datos
$conexion = new mysqli($host_db, $usuario_db, $contrasena_db, $nombre_db);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$searchTerm = $_GET['term'];

// Consulta SQL para buscar productos
$sql = "SELECT * FROM persona WHERE NOMBREPERSONA LIKE '%$searchTerm%'";
$resultado = $conexion->query($sql);

$productos = array();

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $productos[] = $row;
    }
}

echo json_encode($productos);

$conexion->close();
?>