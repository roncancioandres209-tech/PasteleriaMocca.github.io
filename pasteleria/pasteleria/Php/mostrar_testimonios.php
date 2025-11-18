<?php
include_once("conexion.php");

$sql = "SELECT IdTestimonio, nombre, comentario, calificacion, fecha FROM testimonio ORDER BY fecha DESC";
if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nombre = htmlspecialchars($row['nombre']);
            $comentario = htmlspecialchars($row['comentario']);
            $estrellas = intval($row['calificacion']);
            echo "<div class='testimonio'>";
            echo "<p>\"{$comentario}\"</p>";
            echo "<h4>{$nombre}</h4>";
            echo "<span>" . str_repeat('⭐', $estrellas) . "</span>";
            echo "</div>";
        }
    } else {
        echo "<p>No hay testimonios aún. ¡Sé el primero!</p>";
    }
    $result->free();
} else {
    error_log("mostrar_testimonios query error: " . $conn->error);
    echo "<p>Error al cargar testimonios.</p>";
}
?>

