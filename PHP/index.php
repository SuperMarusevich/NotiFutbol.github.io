<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotiFutbol - Inicio</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>NotiFutbol</h1>
        <nav>
            <ul>
                <li><a href="./HTML/noticias.html">Noticias</a></li>
                <li><a href="./HTML/entrevistas.html">Entrevistas</a></li>
                <li><a href="./HTML/futmasc.html">Fútbol Masculino</a></li>
                <li><a href="./HTML/futfem.html">Fútbol Femenino</a></li>
                <li><a href="./HTML/selecciones.html">Seleccionados Nacionales</a></li>
                <li><a href="./HTML/afa.html">Clubes AFA</a></li>
            </ul>
        </nav>
    </header>

    <section id="noticias">
        <h2>Últimas Noticias</h2>
        <div class="noticias-container">
            <?php
            // Incluir el archivo PHP para obtener y mostrar las noticias
            include("php/noticias.php");
            ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 NotiFutbol</p>
    </footer>

    <script src="./JS/script.js"></script> <!-- Archivo de JavaScript -->
</body>
</html>
