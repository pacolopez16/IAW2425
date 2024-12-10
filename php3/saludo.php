<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="saludo.php" method="post">
        <label for="nombre">¿Cómo te llamas?</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Enviar</button>
    </form>
    
    <?php
        if (!empty($_POST["nombre"])) {
            echo "<p>¡Hola, " . htmlspecialchars($_POST["nombre"]) . "! Hoy es " . date("d/m/Y") . ".</p>";
        }
    ?>
</body>
</html>
