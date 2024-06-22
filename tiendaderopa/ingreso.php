<?php
session_start();

$usuarios_validos = [
    'usuario1' => 'contrasena1',
    'usuario2' => 'contrasena2',
];

$nombre = $_POST['nombre_ingreso'];
$contrasena = $_POST['contrasena_ingreso'];

if (isset($usuarios_validos[$nombre]) && $usuarios_validos[$nombre] === $contrasena) {
    $_SESSION['usuario'] = $nombre;
    header("Location: login.php");
    exit();
} else {
    echo "Nombre de usuario o contraseña incorrectos.";
}
?>
