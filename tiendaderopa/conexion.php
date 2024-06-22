<?php
$servername = "localhost";  // Cambia esto si tu servidor no está en localhost
$username = "root";   // Tu nombre de usuario de MySQL
$password = ""; // Tu contraseña de MySQL
$dbname = "tienda_ropa";    // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}
?>