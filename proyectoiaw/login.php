<?php
// login.php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        $error = "Nombre de usuario o contraseña incorrectos.";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="estilosproyecto.css">
    <h2>Inicio de Sesión</h2>

    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    <form method="post" action="login.php">
        <label>Usuario:</label>
        <input type="text" name="username" required><br>
        <label>Contraseña:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
