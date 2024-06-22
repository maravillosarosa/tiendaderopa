<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit();
}

// Productos de ejemplo en el carrito
$productos = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];

// Total del carrito
$total = 0;
foreach ($productos as $producto) {
    $total += $producto['precio'] * $producto['cantidad'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - Tienda de Ropa</title>
    <link rel="icon" type="image/png" href="imag/logoagu.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(180deg, #6a5acd 0%, #4169e1 100%);
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: #333;
        }
        .header {
            background-color: #8a2be2;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 24px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            position: relative;
        }
        .menu {
            position: absolute;
            top: 10px;
            left: 10px;
        }
        .menu button {
            background-color: #8a2be2;
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .menu button:hover {
            background-color: #7a1be1;
        }
        .menu-content {
            display: none;
            position: absolute;
            background-color: #8a2be2;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
        }
        .menu-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .menu-content a:hover {
            background-color: #7a1be1;
        }
        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .cart-box {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-bottom: 20px;
            width: 100%;
            max-width: 800px;
            position: relative;
        }
        .cart-box h2 {
            color: #333;
        }
        .product-item {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .product-item p {
            margin: 0;
        }
        .remove-button {
            background-color: #dc3545;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 12px;
            transition: background-color 0.3s;
        }
        .remove-button:hover {
            background-color: #c82333;
        }
        .footer {
            background-color: #8a2be2;
            color: white;
            text-align: center;
            padding: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
        .total {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
        .checkout-button {
            background-color: #8a2be2;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            transition: background-color 0.3s, transform 0.3s;
        }
        .checkout-button:hover {
            background-color: #7a1be1;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="menu">
            <button id="menu-button">☰</button>
            <div class="menu-content" id="menu-content">
                <a href="login.php">Inicio</a>
                <a href="logout.php">Cerrar sesión</a>
            </div>
        </div>
        Carrito de Compras
    </header>
    <div class="container">
        <div class="cart-box">
            <h2>Tu Carrito</h2>
            <?php if (empty($productos)): ?>
                <p>No hay productos en el carrito.</p>
            <?php else: ?>
                <?php foreach ($productos as $producto): ?>
                    <div class="product-item">
                        <p><?php echo htmlspecialchars($producto['nombre']); ?> (<?php echo $producto['cantidad']; ?>)</p>
                        <p>$<?php echo number_format($producto['precio'], 2); ?></p>
                        <form action="quitar_producto.php" method="post" style="display:inline;">
                            <input type="hidden" name="producto_id" value="<?php echo $producto['id']; ?>">
                            <button type="submit" class="remove-button">Eliminar</button>
                        </form>
                    </div>
                <?php endforeach; ?>
                <div class="total">
                    Total: $<?php echo number_format($total, 2); ?>
                </div>
                <button class="checkout-button">Finalizar Compra</button>
            <?php endif; ?>
        </div>
    </div>
    <footer class="footer">
        Derechos reservados © 2024 Tienda de Ropa
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#menu-button').click(function() {
                $('#menu-content').toggle();
            });

            $(document).click(function(event) {
                if (!$(event.target).closest('#menu-button').length && !$(event.target).closest('#menu-content').length) {
                    $('#menu-content').hide();
                }
            });
        });
    </script>
</body>
</html>