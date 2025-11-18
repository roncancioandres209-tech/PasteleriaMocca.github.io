<?php
include_once("conexion.php");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../Html/nosotros.html");
    exit;
}

$nombre = trim($_POST['nombre'] ?? '');
$correo = trim($_POST['correo'] ?? '');
$celular = trim($_POST['celular'] ?? '');
$mensaje = trim($_POST['mensaje'] ?? '');

if ($nombre === '' || $correo === '') {
    header("Location: ../Html/nosotros.html?error=1");
    exit;
}

$stmt = $conn->prepare("INSERT INTO solicitud (nombre, correo, celular, mensaje) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $correo, $celular, $mensaje);

if ($stmt->execute()) {
    header("Location: ../Html/nosotros.html?ok=1");
    exit;
} else {
    error_log("guardar_solicitud error: " . $stmt->error);
    header("Location: ../Html/nosotros.html?error=1");
    exit;
}
?>
