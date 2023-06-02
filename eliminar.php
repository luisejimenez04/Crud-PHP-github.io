<?php
include "db.php";


$eliminar = $_GET['id_cita'];
$result = $conn->query("DELETE FROM `gestion_cita` WHERE `id_cita` = $eliminar");
header("Location: consultarCitas.php");

?>
