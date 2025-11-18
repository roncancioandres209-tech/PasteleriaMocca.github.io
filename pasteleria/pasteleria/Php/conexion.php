<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pasteleria";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    error_log("DB Connection error: " . $conn->connect_error);
    die("Error de conexión. Intente más tarde.");
}
$conn->set_charset("utf8mb4"); //evita errores
?>
