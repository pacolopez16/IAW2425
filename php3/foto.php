<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Foto</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .contenedor {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        label, input {
            margin: 1rem;
            font-size: 1rem;
        }
        input[type="text"], input[type="file"] {
            padding: 0.7rem;
            width: 250px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        input[type="submit"] {
            padding: 0.7rem 1.5rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <form action="tufoto.php" method="post" id="formulario-foto" enctype="multipart/form-data">
            <label for="nombre">*Tu Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre completo" required>
            <label for="archivo">*Selecciona una Foto:</label>
            <input type="file" name="archivo" id="archivo" required>
            <input type="submit" name="enviar" value="Subir Foto">
        </form>
    </div>
</body>
</html>
