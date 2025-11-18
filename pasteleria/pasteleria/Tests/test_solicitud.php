<?php
include("../conexion.php");

$sql = "SELECT * FROM solicitud ORDER BY fecha_envio DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h2> Prueba de tabla 'solicitud'</h2>";
  echo "<table border='1' cellpadding='8'>
          <tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Celular</th><th>Mensaje</th><th>Fecha</th></tr>";
  
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id_solicitud']}</td>
            <td>{$row['nombre']}</td>
            <td>{$row['correo']}</td>
            <td>{$row['celular']}</td>
            <td>{$row['mensaje']}</td>
            <td>{$row['fecha_envio']}</td>
          </tr>";
  }
  echo "</table>";
} else {
  echo " No hay registros en la tabla 'solicitud'.";
}

$conn->close();
?>
