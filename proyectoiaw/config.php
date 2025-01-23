<?php
// config.php
$servername = "sql308.thsite.top";
$username = "thsi_38097489";
$password = "MAxXJ8!0";
$dbname = "thsi_38097489_bdpaco";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

