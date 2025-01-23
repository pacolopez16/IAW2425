<?php
// editaractividad.php
session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM actividad WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$actividad = $result->fetch_assoc();

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

    $stmt = $conn->prepare("UPDATE actividad SET titulo=?, tipo=?, departamento=?, profesor_responsable=?, trimestre=?, fecha_inicio=?, hora_inicio=?, fecha_fin=?, hora_fin=?, organizador=?, acompanantes=?, ubicacion=?, coste=?, total_alumnos=?, objetivo=? WHERE id=?");
    $stmt->bind_param("ssssssssssssissi", $titulo, $tipo, $departamento, $profesor_responsable, $trimestre, $fecha_inicio, $hora_inicio, $fecha_fin, $hora_fin, $organizador, $acompanantes, $ubicacion, $coste, $total_alumnos, $objetivo, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Actividad</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="estilosproyecto.css">

    <h2>Editar Actividad</h2>
    <form method="post" action="editaractividad.php?id=<?php echo $id; ?>">
        <label>Título:</label>
        <input type="text" name="titulo" value="<?php echo $actividad['titulo']; ?>" required><br>
        <label>Tipo:</label>
        <input type="text" name="tipo" value="<?php echo $actividad['tipo']; ?>" required><br>
        <label>Departamento:</label>
        <input type="text" name="departamento" value="<?php echo $actividad['departamento']; ?>" required><br>
        <label>Profesor Responsable:</label>
        <input type="text" name="profesor_responsable" value="<?php echo $actividad['profesor_responsable']; ?>" required><br>
        <label>Trimestre:</label>
        <input type="text" name="trimestre" value="<?php echo $actividad['trimestre']; ?>" required><br>
        <label>Fecha Inicio:</label>
        <input type="date" name="fecha_inicio" value="<?php echo $actividad['fecha_inicio']; ?>" required><br>
        <label>Hora Inicio:</label>
        <input type="time" name="hora_inicio" value="<?php echo $actividad['hora_inicio']; ?>" required><br>
        <label>Fecha Fin:</label>
        <input type="date" name="fecha_fin" value="<?php echo $actividad['fecha_fin']; ?>" required><br>
        <label>Hora Fin:</label>
        <input type="time" name="hora_fin" value="<?php echo $actividad['hora_fin']; ?>" required><br>
        <label>Organizador:</label>
        <input type="text" name="organizador" value="<?php echo $actividad['organizador']; ?>" required><br>
        <label>Acompañantes:</label>
        <input type="text" name="acompanantes" value="<?php echo $actividad['acompanantes']; ?>" required><br>
        <label>Ubicación:</label>
        <input type="text" name="ubicacion" value="<?php echo $actividad['ubicacion']; ?>" required><br>
        <label>Coste:</label>
        <input type="number" name="coste" value="<?php echo $actividad['coste']; ?>" required><br>
        <label>Total Alumnos:</label>
        <input type="number" name="total_alumnos" value="<?php echo $actividad['total_alumnos']; ?>" required><br>
        <label>Objetivo:</label>
        <textarea name="objetivo" required><?php echo $actividad['objetivo']; ?></textarea><br>
        <button type="submit">Guardar Cambios</button>
    </form>
    <a href="dashboard.php">Volver al Dashboard</a>
</body>
</html>
