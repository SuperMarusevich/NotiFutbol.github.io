<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotiFutbol - Inicio de Sesión</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <header>
        <h1>NotiFutbol</h1>
    </header>

    <section id="login">
        <h2>Iniciar Sesión</h2>
        <form method="POST" action="login.php">
            <label for="username">Usuario:</label>
            <input type="text" name="username" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
            <br>
            <button type="submit" name="login">Iniciar Sesión</button>
        </form>

        <h3>¿No tienes cuenta? Regístrate aquí:</h3>
        <form method="POST" action="login.php">
            <label for="new_username">Nuevo Usuario:</label>
            <input type="text" name="new_username" required>
            <br>
            <label for="new_email">Email:</label>
            <input type="email" name="new_email" required>
            <br>
            <label for="new_password">Contraseña:</label>
            <input type="password" name="new_password" required>
            <br>
            <button type="submit" name="register">Registrarse</button>
        </form>
    </section>

    <?php
    include('conexion.php'); // Incluir conexión a la base de datos

    // Lógica para iniciar sesión
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM Usuarios WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Inicio de sesión exitoso
                echo "<p>¡Bienvenido, $username!</p>";
            } else {
                echo "<p>Contraseña incorrecta.</p>";
            }
        } else {
            echo "<p>Usuario no encontrado. Regístrate para crear una cuenta.</p>";
        }
    }

    // Lógica para registrarse
    if (isset($_POST['register'])) {
        $new_username = $_POST['new_username'];
        $new_email = $_POST['new_email'];
        $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT); // Hashear contraseña

        $sql = "INSERT INTO Usuarios (username, password, email) VALUES ('$new_username', '$new_password', '$new_email')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<p>Registro exitoso. Ahora puedes iniciar sesión.</p>";
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }

    $conn->close(); // Cerrar conexión
    ?>

    <footer>
        <p>&copy; 2024 NotiFutbol</p>
    </footer>
</body>
</html>
