<?php
include "db.php";
$eliminar = $_POST['id_cita'];
$result = $conn->query("DELETE FROM `gestion_cita` WHERE `id_cita` = '$eliminar");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
</body>
</html>