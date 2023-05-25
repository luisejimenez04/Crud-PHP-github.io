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
                <li><a href="estadoCitas.php">Estado de cita</a></li>
                <li style="background-color: #2980B9;"><a href="consultarCitas.php">Consultar citas</a></li>
                <li><a href="#">Resumen</a></li>
            </ul>
        </nav>
    </aside>
    <main>
        <h1>Estado de solicitudes</h1>
        <h2>Lista de solicitudes</h2>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th >Motivo</th>
                <th>Teléfono</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Estado</th>
                <th style="max-width: 50px; font-size: 12px;">Aceptar/Rechazar</th>
            </tr>
            <tr>
                
                <td><p>Luis</p></td>
                <td><p>Jiménez</p></td>
                <td><?php echo $tarea['Descripcion']; ?></td>
                <td><?php echo $tarea['estado']; ?></td>
                <td><?php echo $tarea['creado']; ?></td>
                <td><?php echo $tarea['modificado']; ?></td>
                <td><p>En espera</p></td> 
                <td style="max-width: 50px;">
                    <button type="button" class="estadoAceptado" >Aceptar</button>
                    <button type="button" class="estadoRechazado">Rechazar</button>
                    <button type="button" class="estadoEditar">Editar</button>
                </td>           
            </tr>
        </table>
    </main>
</body>
</html>