<?php
require 'db.php'; 
$sql = "SELECT * FROM gestion_cita";
$stmt = $conn->prepare($sql);
$stmt->execute();
$cita = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);


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
        <h1>Estado actual de citas</h1>
        <h2>Mis registros</h2>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Motivo</th>
                <th>Teléfono</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Estado</th>
            </tr>
             <?php foreach ($cita as $citas): ?> 
               <tr> 
               <td><p><?php
               $id_paciente = $citas['id_paciente'];
               $sql1 = "SELECT nombre FROM paciente WHERE id_paciente = '$id_paciente'";
               $result = $conn->query($sql1);
               if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
               $nombre = $row['nombre'];
               echo $nombre;
               }   
               ?></p></td> 
               <td><p><?php
               $id_paciente = $citas['id_paciente'];
               $sql1 = "SELECT apellido FROM paciente WHERE id_paciente = '$id_paciente'";
               $result = $conn->query($sql1);
               if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
               $apellido = $row['apellido'];
               echo $apellido;
               }   
               ?></p></td>
               <td><p><?php echo  $citas['observaciones']; ?></p></td>
               <td><p><?php echo  $citas['telefono']; ?></p></td>  
               <td><p><?php echo  $citas['fecha_cita']; ?></p></td>
               <td><p><?php echo  $citas['hora_cita']; ?></p></td>
               <td><p><?php echo  $citas['estado']; ?></p></td>      
               </tr> 
             <?php endforeach; ?> 
        </table>      
    </main>
</body>
</html>