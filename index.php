<?php
require_once 'db.php';



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestion</title>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="left">
            <img src="img/logo.jpg" alt="logo" width="350px">
        </div>
        <div class="right">
            <h1>Hospital | Ore Por su Salud</h1>
            <div class="right__content">
                <h2>Iniciar sesión</h2>
                <form>
                    <label id="for">Correo</label>
                    <input type="email" id="correo" name="correo" required>
                    <label id="for">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                    <input type="submit" value="Iniciar" >
                    <p>Formulario de registro: <a href="registro.php">¡Haz click aquí!</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>