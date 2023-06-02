<?php
 require_once('db.php');
 $id = $_GET['id'];
 $query = "SELECT * FROM gestion_cita";
    $query2 = "SELECT * FROM gestion_cita WHERE id_cita = $id";  
    $result = $conn->query($query);
    $result2 = $conn->query($query2);
    $record = $result2->fetch_assoc();
    
    
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
        <h1>Modificacion de la cita</h1>
        <h2>Datos</h2>
        <div class="container">
            <form method="POST" action= "prueba.php" >
                <div class="form__data">
                    <label for="fecha">Fecha de la cita:</label>
                    <input type="date" id="fecha_cita" name="fecha_cita" 
                    value="<?php echo $record['fecha_cita']; ?>" required><br><br>

                    <label for="hora">Hora de la cita:</label>
                    <input type="time" id="hora_cita" name="hora_cita" 
                    value="<?php echo $record['hora_cita']; ?>" required><br><br>        
                    <input type="hidden" name="id_cita" value="<?php echo $id; ?>">
                    <input type="submit" name="enviar" value="Actualizar">
                </div>
            </form>
        </div>
</main>
</body>
</html>