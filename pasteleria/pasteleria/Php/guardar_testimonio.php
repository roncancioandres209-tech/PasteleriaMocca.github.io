<?php
include_once("conexion.php");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../Html/productos.php");
    exit;
}

$nombre = trim($_POST['nombre'] ?? '');
$correo = trim($_POST['correo'] ?? '');
$comentario = trim($_POST['comentario'] ?? '');
$calificacion = intval($_POST['calificacion'] ?? 0);

//validar dato
if ($nombre === '' || $comentario === '') {
    $_SESSION['error'] = "Nombre y comentario son obligatorios.";
    header("Location: ../Html/productos.php");
    exit;
}
//insertar
$stmt = $conn->prepare("INSERT INTO testimonio (nombre, correo, comentario, calificacion) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $nombre, $correo, $comentario, $calificacion);

if ($stmt->execute()) {
    header("Location: ../Html/productos.php?ok=1");
    exit;
} else {
    error_log("guardar_testimonio error: " . $stmt->error);
    header("Location: ../Html/productos.php?error=1");
    exit;
}
?>


