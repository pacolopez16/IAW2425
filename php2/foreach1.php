<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach</title>
</head>
<body>
    <?php
   $refranes = [
    "A quien buen árbol se arrima, buena sombra le cobija",
    "No hay mal que dure cien años",
    "El que mucho corre, pronto para",
    "Cría cuervos y te sacarán los ojos",
    "A perro flaco, todo son pulgas",
    "La curiosidad mató al gato",
    "El que tiene boca se equivoca",
    "Quien siembra vientos, recoge tempestades",
    "En tierra de ciegos, el tuerto es rey",
    "Cuando las barbas de tu vecino veas cortar, pon las tuyas a remojar",
    "No hay peor ciego que el que no quiere ver",
    "La gota horada la piedra",
    "A grandes males, grandes remedios",
    "Al que no le gusta la sopa, le dan dos tazas",
    "El que mucho habla, mucho yerra",
   ];
   echo "<ul>"; 
   foreach($refranes as $refran){      
        echo "<li>$refran</li>"; 
   }
   echo "</ul>";  
   
   ?>
</body>
</html>