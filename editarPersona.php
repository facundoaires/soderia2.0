<?php 
    include('conexion.php');

    $id=$_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $cuil = $_REQUEST['cuil'];
    $domicilio = $_REQUEST['domicilio'];
    $telefono = $_REQUEST['telefono'];
    $usuario = $_REQUEST['username'];
    $contrasena = $_REQUEST['password'];
    $tipoPersona = $_REQUEST['tipoPersona'];
 
    $consulta=mysqli_query($conexion, "UPDATE persona SET NOMBREPERSONA ='$nombre', IDCATEGORIAPERSONA = $tipoPersona, CUILPERSONA = $cuil, DOMICILIOPERSONA = '$domicilio', TELEFONOPERSONA = $telefono, USUARIOPERSONA = '$usuario', CONTRASENAPERSONA = '$contrasena' WHERE IDPERSONA=$id");

    header("location: informePersonas.php");
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
    La actualizacion se realizo con exito <br>
    <a href="informePersonas.php">Volver</a>
</body>
</html>
?>