<?php
require_once "db.php";
$fecha_cita = $_POST['fecha_cita'];
$hora_cita = $_POST['hora_cita'];
$id = $_POST['id_cita'];
$query = "UPDATE gestion_cita SET fecha_cita = '$fecha_cita', hora_cita = '$hora_cita' WHERE id_cita = $id";
$conn->query($query);
header("Location: consultarCitas.php");
?>