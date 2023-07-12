<?php
$host_db="localhost";
$nombre_db="soderia2";
$usuario_db="root";
$contraseña_db="";

//$conexion=mysqli_connect("localhost", "root", "", "soderia") or die("Problemas de la conexion");
$conexion = new mysqli($host_db, $usuario_db, $contraseña_db);
mysqli_select_db($conexion,$nombre_db) or die("Fallo la conexion");
mysqli_set_charset($conexion, "utf8");
?>