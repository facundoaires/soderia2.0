<?php
require_once "conect.php";

// Verificar si se enviaron los datos del formulario
if(isset($_POST['username']) && isset($_POST['password'])) {
  // Obtener los datos enviados desde el formulario
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Consultar la base de datos para validar las credenciales del usuario
  $consulta = mysqli_query($conn, "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'");

  if(mysqli_num_rows($consulta) == 1) { // Verificar si se encontró un registro coincidente
    // Inicio de sesión exitoso
    header("Location: inicio.php");
    exit();
  } else {
    // Credenciales incorrectas
    echo "Usuario o contraseña incorrectos";
  }
} else {
  // Los datos del formulario no se enviaron correctamente
  echo "Por favor, completa todos los campos";
}

$conn->close();
?>
