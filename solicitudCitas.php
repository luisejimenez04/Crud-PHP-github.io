<?php
require_once 'db.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $observaciones = $_POST["observaciones"];
    $telefono = $_POST["telefono"];
    $fecha = $_POST["fecha_cita"];
    $hora = $_POST["hora_cita"];

    session_start();
    $id_usario = $_SESSION['infoUser']['id_usuario'];
    $id_paciente = "SELECT id_paciente FROM paciente WHERE id_usuario = '$id_usuario'";
    $stmt = $conn->query($id_paciente); 
    $fila = $stmt->fetch_assoc();
    $id_paciente2 = $fila["id_paciente"];
    printf($id_paciente2);
   // INSERT INTO `gestion_cita`(`observaciones`, `telefono`, `fecha_cita`, `hora_cita`)
   //  VALUES ('[value-4]','[value-5]','[value-6]','[value-7]')
    $sql = "INSERT INTO gestion_cita (id_paciente,observaciones, telefono, fecha_cita, hora_cita, estado)
        VALUES ('$id_paciente2','$observaciones', '$telefono', '$fecha', '$hora', 'En espera')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Se ha enviado correctamente");</script>';
    } else {
        echo '<script>alert("Solicitud fallida - Intentalo más tarde");</script>';
    }
} 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestion</title>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/styleInicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>
   <?php
    include 'funciones/func.php';
   ?>
    <main>
        <h1>Solicitud de cita</h1>
        <div class="container">
            <form method= "POST" action= "solicitudCitas.php" >
                <div class="form__info">
                    <label for="motivo">Motivo de la cita:</label>
                    <textarea name="observaciones" id="observaciones" cols="30" rows="3" required></textarea>
                    <br><br>
                </div>

                <div class="form__data">
                    <label for="telefono">Número de teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required><br><br>

                    <label for="fecha">Fecha de la cita:</label>
                    <input type="date" id="fecha_cita" name="fecha_cita" required><br><br>

                    <label for="hora">Hora de la cita:</label>
                    <input type="time" id="hora_cita" name="hora_cita" required><br><br>

                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </main>
</body>

</html>