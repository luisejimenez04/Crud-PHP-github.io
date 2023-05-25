<?php 
$host = 'localhost';#localhosr
$user = 'root';#usuario
$password = '';#contraseña
$database = 'gestion_citas_medicas';
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die('Error de conexión: ' . mysqli_connect_error());
}
?> 