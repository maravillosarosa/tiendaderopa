<?php
session_start();

if (isset($_POST['producto_id'])) {
    $producto_id = $_POST['producto_id'];

    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $index => $producto) {
            if ($producto['id'] == $producto_id) {
                unset($_SESSION['carrito'][$index]);
                $_SESSION['carrito'] = array_values($_SESSION['carrito']);
                break;
            }
        }
    }
}

header("Location: carrito.php");
exit();
?>