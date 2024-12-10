<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al sistema</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <label for="user">Nombre de usuario:</label>
        <input type="text" id="user" name="usuario" placeholder="Introduce tu usuario" required>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="pass" placeholder="Introduce tu contraseña" required>
        <button type="submit">Entrar</button>
    </form>

    <?php
        if (!empty($_POST["usuario"]) && !empty($_POST["pass"])) {
            $usuario = htmlspecialchars($_POST["usuario"]);
            $password = htmlspecialchars($_POST["pass"]);
            if ($usuario === "admin" && $password === "H4CK3R4$1R") {
                echo "<p>¡Bienvenido al sistema!</p>";
            } else {
                echo "<p>Acceso denegado. Las credenciales no son correctas.</p>";
            }
        }
    ?>
</body>
</html>
