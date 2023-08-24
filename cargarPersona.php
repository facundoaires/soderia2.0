<?php
    include('conexion.php');

    $nombre = $_REQUEST['nombre'];
    $cuil = $_REQUEST['cuil'];
    $domicilio = $_REQUEST['domicilio'];
    $telefono = $_REQUEST['telefono'];
    $usuario =$_REQUEST['username'];
    $contrasena =$_REQUEST['password'];
    $tipoPersona=$_REQUEST['tipoPersona'];

    $consulta=mysqli_query($conexion, "INSERT INTO persona(NOMBREPERSONA, IDCATEGORIAPERSONA, CUILPERSONA, DOMICILIOPERSONA, TELEFONOPERSONA, USUARIOPERSONA, CONTRASENAPERSONA) VALUES ('$nombre', '$tipoPersona', '$cuil', '$domicilio', '$telefono', '$usuario', '$contrasena')");
    
    header("location: crearPersona.php");
    exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    La carga se realizo con exito <br>
    <a href="crearPersona.php">Volver</a>
</body>
</html>