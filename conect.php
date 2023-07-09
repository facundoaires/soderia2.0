<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servidor = "localhost";
$base_datos = "soderia";
$usuario = "root";
$clave = null;

$conn = new mysqli($servidor, $usuario, $clave, $base_datos);

// Verificar si hay errores de conexión
if ($conn->connect_errno) 
{
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

