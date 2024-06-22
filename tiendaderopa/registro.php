<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $correo = $conn->real_escape_string($_POST['correo']);
    $contrasena = password_hash($conn->real_escape_string($_POST['contrasena']), PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. ¡Bienvenido, $nombre!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>