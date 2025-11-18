<?php
include("../conexion.php");

$sql = "SELECT * FROM testimonio ORDER BY fecha DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h2> Prueba de tabla 'testimonio'</h2>";
  echo "<table border='1' cellpadding='8'>
          <tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Comentario</th><th>Calificación</th><th>Fecha</th></tr>";
  
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id_testimonio']}</td>
            <td>{$row['nombre']}</td>
            <td>{$row['correo']}</td>
            <td>{$row['comentario']}</td>
            <td>{$row['calificacion']}</td>
            <td>{$row['fecha']}</td>
          </tr>";
  }
  echo "</table>";
} else {
  echo " No hay registros en la tabla 'testimonio'.";
}

$conn->close();
?>
