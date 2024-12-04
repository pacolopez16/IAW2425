<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort</title>
</head>
<body>
    <?php
        $deportes = array("Fútbol", "Baloncesto", "Tenis", "Natación", "Ciclismo", "Atletismo", "Voleibol", "Golf", "Rugby", "Béisbol");
        sort($deportes);
        $total = count($deportes);
        for($i=0;$i<=$total-1;$i++){
            echo"$deportes[$i]<br>";
        }
    ?>
</body>
</html>