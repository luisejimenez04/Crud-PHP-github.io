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
                <li style="background-color: #2980B9;"><a href="solicitudCitas.php">Solicitar</a></li>
                <li><a href="estadoCitas.php">Estado de cita</a></li>
                <li><a href="consultarCitas.php">Consultar citas</a></li>
                <li><a href="#">Resumen</a></li>
            </ul>
        </nav>
    </aside>
    <main>
        <h1>Solicitud de cita</h1>
        <div class="container">
            <form>
                <div class="form__info">
                    <label for="motivo">Motivo de la cita:</label>
                    <textarea name="motivo" id="motivo" cols="30" rows="3" required></textarea>
                    <br><br>
                </div>

                <div class="form__data">
                    <label for="telefono">Número de teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required><br><br>

                    <label for="fecha">Fecha de la cita:</label>
                    <input type="date" id="fecha" name="fecha" required><br><br>

                    <label for="hora">Hora de la cita:</label>
                    <input type="time" id="hora" name="hora" required><br><br>

                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </main>
</body>

</html>