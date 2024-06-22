<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - Tienda de Ropa</title>
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
        .welcome-box, .product-box {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-bottom: 20px;
            width: 100%;
            max-width: 500px;
            position: relative;
        }
        .welcome-box h2, .product-box h2 {
            color: #333;
        }
        .logout-button, .add-to-cart-button {
            background-color: #8a2be2;
            border: none;
            padding: 10px;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            margin-top: 20px;
            font-size: 16px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            transition: background-color 0.3s, transform 0.3s;
        }
        .logout-button:hover, .add-to-cart-button:hover {
            background-color: #7a1be1;
            transform: scale(1.05);
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        li .product-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 700;
        }
        li button {
            background-color: #dc3545;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 12px;
            transition: background-color 0.3s;
        }
        li button:hover {
            background-color: #c82333;
        }
        .footer {
            background-color: #8a2be2;
            color: white;
            text-align: center;
            padding: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="menu">
            <button id="menu-button">☰</button>
            <div class="menu-content" id="menu-content">
                <a href="carrito.php">Ver Carrito</a>
                <a href="logout.php">Cerrar sesión</a>
            </div>
        </div>
        Tienda de Ropa
    </header>
    <div class="container">
        <div class="welcome-box">
            <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h2>
            <p>Has ingresado exitosamente.</p>
        </div>
        <div class="product-box">
            <h2>Productos Disponibles</h2>
            <ul id="product-list">
                <!-- Aquí se mostrarán los productos -->
                <li>
                    <div class="product-title">
                        Camisa para hombre
                        <button class="add-to-cart-button">Agregar al carrito</button>
                    </div>
                    <p>Descripción del producto 1</p>
                    <p>Precio: $10.000</p>
                </li>
                <li>
                    <div class="product-title">
                        Camisa para mujer
                        <button class="add-to-cart-button">Agregar al carrito</button>
                    </div>
                    <p>Descripción del producto 2</p>
                    <p>Precio: $20.000</p>
                </li>
                <li>
                    <div class="product-title">
                        5 camisetas de hombre
                        <button class="add-to-cart-button">Agregar al carrito</button>
                    </div>
                    <p>Descripción del producto 3</p>
                    <p>Precio: $40.000</p>
                </li>
                <li>
                    <div class="product-title">
                        Productos exclusivos
                        <button class="add-to-cart-button">Agregar al carrito</button>
                    </div>
                    <p>Descripción del producto 4</p>
                    <p>Precio: $520.000</p>
                </li>
                <!-- Puedes añadir más productos aquí -->
            </ul>
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

            $('.add-to-cart-button').click(function() {
                alert('Producto agregado al carrito.');
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
