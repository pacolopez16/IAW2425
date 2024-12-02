<?php
        $generado = rand(100000,999999);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrados de color</title>
    <style>
    #cuadrados{width: 300px; height:300px; background-color:<?php echo "#" . $generado;?>}
    </style>
</head>
<body>
    <div id="cuadrados"></div>
    
</body>
</html>