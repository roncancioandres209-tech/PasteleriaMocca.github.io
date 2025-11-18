<?php

include("conexion.php");

$servername = "localhost";
$username = "root";
$password = "";
$database = "pasteleria";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("❌ Error de conexión: " . $conn->connect_error);
} else {
  echo "✅ Conexión exitosa a la base de datos 'pasteleria'.";
}

$conn->close();
?>
