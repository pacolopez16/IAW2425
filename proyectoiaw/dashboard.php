<?php
// dashboard.php
session_start();
include 'config.php';
include 'check_session.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM actividad";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="estilosproyecto.css">

    <h2>Bienvenido, <?php echo $_SESSION['username']; ?></h2>
    <a href="anadiractividad.php">Añadir Actividad</a>
    <h3>Actividades Registradas</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Tipo</th>
            <th>Departamento</th>
            <th>Profesor Responsable</th>
            <th>Trimestre</th>
            <th>Fecha Inicio</th>
            <th>Hora Inicio</th>
            <th>Fecha Fin</th>
            <th>Hora Fin</th>
            <th>Organizador</th>
            <th>Acompañantes</th>
            <th>Ubicación</th>
            <th>Coste</th>
            <th>Total Alumnos</th>
            <th>Objetivo</th>
            <th>Acciones</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['titulo'] . "</td>";
                echo "<td>" . $row['tipo'] . "</td>";
                echo "<td>" . $row['departamento'] . "</td>";
                echo "<td>" . $row['profesor_responsable'] . "</td>";
                echo "<td>" . $row['trimestre'] . "</td>";
                echo "<td>" . $row['fecha_inicio'] . "</td>";
                echo "<td>" . $row['hora_inicio'] . "</td>";
                echo "<td>" . $row['fecha_fin'] . "</td>";
                echo "<td>" . $row['hora_fin'] . "</td>";
                echo "<td>" . $row['organizador'] . "</td>";
                echo "<td>" . $row['acompanantes'] . "</td>";
                echo "<td>" . $row['ubicacion'] . "</td>";
                echo "<td>" . $row['coste'] . "</td>";
                echo "<td>" . $row['total_alumnos'] . "</td>";
                echo "<td>" . $row['objetivo'] . "</td>";
                echo "<td><a href='editaractividad.php?id=" . $row['id'] . "'>Editar</a> | <a href='borraractividad.php?id=" . $row['id'] . "'>Borrar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='17'>No hay actividades registradas.</td></tr>";
        }
        ?>
    </table>
    <a href="cerrarsesion.php">Cerrar Sesión</a>
</body>
</html>
