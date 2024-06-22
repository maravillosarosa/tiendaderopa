<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa Elegante</title>
    <link rel="icon" type="image/png" href="imag/logo.png">
    <style>
        body {
            background: linear-gradient(180deg, #8E44AD 0%, #3498DB 100%);
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 20px;
            color: #2C3E50;
        }
        h1 {
            color: #fff;
            text-align: center;
            margin-top: 0;
        }
        .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 30px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
        .section {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
        .section img {
            max-width: 100%;
            display: block;
            margin: 0 auto;
        }
        .section h2 {
            text-align: center;
            color: #8E44AD;
        }
        .section a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #3498DB;
            text-decoration: none;
        }
        .form-section {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
        .form-section h2 {
            text-align: center;
            color: #8E44AD;
        }
        .form-section form {
            text-align: center;
        }
        footer {
            grid-column: 1 / -1;
            text-align: center;
            margin-top: 20px;
            color: #fff;
        }
        hr {
            background-color: #fff;
        }
        .menu {
            display: block;
            text-align: center;
        }
        .menu > ul {
            display: inline-block;
            padding: 0;
            margin: 0;
        }
        .menu > ul > li {
            display: inline;
            list-style: none;
            padding: 15px;
            border-radius: 20px;
        }
        .menu > ul > li > a {
            text-decoration: none;
            color: #fff;
        }
        .menu > ul > li > a:hover {
            color: #3498DB;
            padding: 15px;
            height: 25px;
            background-color: #fff;
            border-radius: 25px;
        }
        nav {
            background-color: #8E44AD;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
        nav > ul {
            list-style-type: none;
            margin: 0;
        }
        nav > ul > li {
            display: inline;
        }
        nav > ul > li > a {
            color: #fff;
            text-decoration: none;
        }
        .btn {
            background-color: #3498DB;
            padding: 8px 25px;
            border: 0;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            border-radius: 25px;
            color: #ffffff;
            cursor: pointer;
            font-size: 16px;
        }
        ::placeholder {
            color: #8E44AD;
            font-size: 12px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #3498DB;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            top: 100%;
            left: 0;
            border-radius: 25px;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-content a {
            padding: 10px 15px;
            display: block;
            color: #fff;
            text-decoration: none;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            padding: 10px;
            border-radius: 20px;
        }
        nav ul li a:hover {
            background-color: #3498DB;
            border-radius: 25px;
            color: #2C3E50;
        }
        #registro, #ingreso {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            z-index: 9999;
        }
    </style>
</head>
<body>
    <header class="inicio">
        <hr>
        <h1>Bienvenido a la Tienda de Ropa Elegante</h1>
        <hr>
    </header>
    <div id="menu" class="form-section">
        <nav class="menu">
            <ul>
                <li><a href="#productos">Inicio</a></li>
                <li class="dropdown">
                    <a href="#">Categorías</a>
                    <div class="dropdown-content">
                        <a href="#">Hombres</a>
                        <a href="#">Mujeres</a>
                        <a href="#">Niños</a>
                    </div>
                </li>
                <li><a href="#registro">Registrarse</a></li>
                <li><a href="login.php">Ingreso</a></li>
                <li><a href="contacto.html">Contáctenos</a></li>
            </ul>
        </nav>
    </div>
    <hr>
    <div id="registro" class="form-section">
    <h2>Registrarse</h2>
    <form action="registro.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required><br>
        <label for="correo">Correo electrónico:</label><br>
        <input type="email" id="correo" name="correo" placeholder="Correo electrónico" required><br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required><br><br>
        <button type="submit" class="btn">Registrarse</button>
        <button type="button" class="btn cancelar">Cancelar</button>
    </form>
</div>

<div id="ingreso" class="form-section">
    <h2>Ingreso</h2>
    <form action="login.php" method="post">
        <label for="nombre_ingreso">Nombre:</label><br>
        <input type="text" id="nombre_ingreso" name="nombre_ingreso" placeholder="Nombre" required><br>
        <label for="contrasena_ingreso">Contraseña:</label><br>
        <input type="password" id="contrasena_ingreso" name="contrasena_ingreso" placeholder="Contraseña" required><br><br>
        <button type="submit" class="btn">Ingresar</button>
        <button type="button" class="btn cancelar">Cancelar</button>
    </form>
</div>
</div>
    <div id="productos" class="container">
        <div class="section">
            <h2>Ropa de Hombre</h2>
            <img src="imag/hombre.jpg" alt="Ropa de Hombre">
            <a href="hombres.html" target="_blank">Ver Colección</a>
        </div>
        <div class="section">
            <h2>Ropa de Mujer</h2>
            <img src="imag/mujer.jpg" alt="Ropa de Mujer">
            <a href="mujeres.html" target="_blank">Ver Colección</a>
        </div>
        <div class="section">
            <h2>Ropa de Niños</h2>
            <img src="imag/ninos.jpg" alt="Ropa de Niños">
            <a href="ninos.html" target="_blank">Ver Colección</a>
        </div>
        <div class="section">
            <h2>Ofertas</h2>
            <img src="imag/ofertas.jpg" alt="Ofertas">
            <a href="ofertas.html" target="_blank">Ver Ofertas</a>
        </div>
    </div>
    <footer>
        <p>Derechos reservados © 2024 Tienda de Ropa Elegante</p>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector("#menu ul li:nth-child(3) a").addEventListener("click", function(event) {
                event.preventDefault();
                document.getElementById("registro").style.display = "block";
            });
            document.querySelector("#menu ul li:nth-child(4) a").addEventListener("click", function(event) {
                event.preventDefault();
                document.getElementById("ingreso").style.display = "block";
            });
            document.querySelectorAll(".cancelar").forEach(button => {
                button.addEventListener("click", function() {
                    document.getElementById("registro").style.display = "none";
                    document.getElementById("ingreso").style.display = "none";
                });
            });
        });
    </script>
</body>
</html>