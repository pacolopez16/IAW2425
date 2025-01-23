<?php
// anadiractividad.php
session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $tipo = $_POST['tipo'];
    $departamento = $_POST['departamento'];
    $profesor_responsable = $_POST['profesor_responsable'];
    $trimestre = $_POST['trimestre'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $hora_inicio = $_POST['hora_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $hora_fin = $_POST['hora_fin'];
    $organizador = $_POST['organizador'];
    $acompanantes = $_POST['acompanantes'];
    $ubicacion = $_POST['ubicacion'];
    $coste = $_POST['coste'];
    $total_alumnos = $_POST['total_alumnos'];
    $objetivo = $_POST['objetivo'];

    $stmt = $conn->prepare("INSERT INTO actividad (titulo, tipo, departamento, profesor_responsable, trimestre, fecha_inicio, hora_inicio, fecha_fin, hora_fin, organizador, acompanantes, ubicacion, coste, total_alumnos, objetivo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssiss", $titulo, $tipo, $departamento, $profesor_responsable, $trimestre, $fecha_inicio, $hora_inicio, $fecha_fin, $hora_fin, $organizador, $acompanantes, $ubicacion, $coste, $total_alumnos, $objetivo);
    $stmt->execute();
    $stmt->close();

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Añadir Actividad</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="estilosproyecto.css">

    <h2>Añadir Actividad</h2>
    <form method="post" action="anadiractividad.php">
        <label>Título:</label>
        <input type="text" name="titulo" required><br>
        <label>Tipo:</label>
        <input type="text" name="tipo" required><br>
        <label>Departamento:</label>
        <input type="text" name="departamento" required><br>
        <label>Profesor Responsable:</label>
        <input type="text" name="profesor_responsable" required><br>
        <label>Trimestre:</label>
        <input type="text" name="trimestre" required><br>
        <label>Fecha Inicio:</label>
        <input type="date" name="fecha_inicio" required><br>
        <label>Hora Inicio:</label>
        <input type="time" name="hora_inicio" required><br>
        <label>Fecha Fin:</label>
        <input type="date" name="fecha_fin" required><br>
        <label>Hora Fin:</label>
        <input type="time" name="hora_fin" required><br>
        <label>Organizador:</label>
        <input type="text" name="organizador" required><br>
        <label>Acompañantes:</label>
        <input type="text" name="acompanantes" required><br>
        <label>Ubicación:</label>
        <input type="text" name="ubicacion" required><br>
        <label>Coste:</label>
        <input type="number" name="coste" required><br>
        <label>Total Alumnos:</label>
        <input type="number" name="total_alumnos" required><br>
        <label>Objetivo:</label>
        <textarea name="objetivo" required></textarea><br>
        <button type="submit">Añadir Actividad</button>
    </form>
    <a href="dashboard.php">Volver al Dashboard</a>
</body>
</html>
