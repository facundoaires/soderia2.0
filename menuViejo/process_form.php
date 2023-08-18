<?php
// Recuperar los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];

// Verificar si la contraseña y la confirmación son iguales
if ($password === $confirmPassword) {
  // Conexión a la base de datos (modifica los valores según tu configuración)
    $servidor = "localhost";
    $base_datos = "soderia";
    $usuario = "root";
    $clave = null;

  // Crear la conexión
  $conn = new mysqli($servidor, $base_datos, $usuario, $clave);

  // Verificar si hay errores en la conexión
  if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
  }

  // Verificar si el nombre de usuario ya existe en la tabla
  $query = "SELECT * FROM usuarios WHERE username = '$username'";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    echo "El nombre de usuario ya existe.";
  } else {
    // El nombre de usuario no existe, insertar el nuevo usuario
    $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
      echo "Usuario creado exitosamente.";
    } else {
      echo "Error al crear el usuario: " . $conn->error;
    }
  }

  // Cerrar la conexión
  $conn->close();
} else {
  echo "La contraseña y la confirmación no coinciden.";
}
?>
