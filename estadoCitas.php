<?php

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
    <aside>
    <a href="index.php"><img src="img/usuario.png" alt="perfil" width="100px"></a>
        <h2>Hola!</h2>
        <nav>
            <ul>
                <li><a href="solicitudCitas.php">Solicitar</a></li>
                <li style="background-color: #2980B9;"><a href="estadoCitas.php">Estado de cita</a></li>
                <li><a href="consultarCitas.php">Consultar citas</a></li>
                <li><a href="#">Resumen</a></li>
            </ul>
        </nav>
    </aside>
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
            <tr>
                <!--
                <td> <?php echo $tarea['id']; ?></td>
                <td><?php echo $tarea['titulo']; ?></td>
                <td><?php echo $tarea['Descripcion']; ?></td>
                <td><?php echo $tarea['estado']; ?></td>
                <td><?php echo $tarea['creado']; ?></td>
                <td><?php echo $tarea['modificado']; ?></td>
                -->
            </tr>
        </table>
    
        <!-- Formulario para agregar una nueva tarea -->
        <!--
        <h2>Agregar Nueva Tarea</h2>
        <form action="create_tarea.php" method="POST">
            <label for="title">Título:</label>
            <input type="text" name="titulo" required><br>
    
            <label for="description">Descripción:</label>
            <textarea name="descripcion" required></textarea><br>
    
            <label for="status">Estado:</label>
            <select name="status" required>
                <option value="Pendiente">Pendiente</option>
                <option value="En Progreso">En Progreso</option>
                <option value="Completada">Completada</option>
            </select><br>
    
            <input type="submit" value="Agregar Tarea">
        </form>
        -->
    </main>
</body>
</html>