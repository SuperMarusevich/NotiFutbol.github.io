<?php
$servername = "localhost"; // Cambia según tu configuración
$username = "root";         // Usuario MySQL
$password = "";             // Contraseña MySQL (deja vacío si no hay)
$dbname = "notifutbol";     // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
