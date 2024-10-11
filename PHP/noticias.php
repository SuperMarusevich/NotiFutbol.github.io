<?php
include('conexion.php'); // Incluir el archivo de conexión

$sql = "SELECT titulo, contenido, fecha_publicacion FROM Noticias ORDER BY fecha_publicacion DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='noticia'>";
        echo "<h3>" . $row['titulo'] . "</h3>";
        echo "<p>" . $row['contenido'] . "</p>";
        echo "<small>Publicado el: " . $row['fecha_publicacion'] . "</small>";
        echo "</div>";
    }
} else {
    echo "<p>No hay noticias disponibles.</p>";
}

$conn->close(); // Cerrar conexión
?>
