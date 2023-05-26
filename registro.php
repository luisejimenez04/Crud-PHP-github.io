<?php 
require_once 'db.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $identificacion = $_POST["numeroIdentificacion"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $rol = $_POST["rol"];

    // INSERTAR datos en la base de datos!!!!!!!!!!!!!!!!!!!!!!!
    //nombre	apellido	edad	identificacion	correo	contrasena	rol	
    $sql = "INSERT INTO usuario (nombre, apellido, edad, numeroIdentificacion, correo, contrasena, rol)
        VALUES ('$nombre', '$apellido', $edad, $identificacion, '$correo', '$contrasena', '$rol')";

    $sql2 = "INSERT INTO medico (nombre, apellido, correo, contrasena)
        VALUES ('$nombre', '$apellido', '$correo', '$contrasena')";

    $sql3 = "INSERT INTO paciente (nombre, apellido, correo, contrasena)
        VALUES ('$nombre', '$apellido', '$correo', '$contrasena')";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Se ha registrado correctamente");</script>';
        if($rol == 'medico'){
            $conn->query($sql2);
        }
        if($rol == 'paciente'){
            $conn->query($sql3); 
        }
    } else {
        echo '<script>alert("Registro rechazado - Vuelve a intentarlo");</script>';
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
    <link rel="stylesheet" href="css/styleRegister.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header__logo">
            <a href="index.php"><img src="img/logo.jpg" alt="logo" width="100px"></a>
            <h2><a href="index.php">Lorem Ipsum</a></h2>
        </div>
        <nav>
            <ul>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Quiénes somos</a></li>
                <li><a href="#">Foro</a></li>
            </ul>
        </nav>
    </header>
    <main>
       <div class="container">
        <img src="img/hospital.png" alt="imagendeRegistro">
        <div class="content">
            <form  method="POST" action="registro.php">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required><br><br>

                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required><br><br>

                <label for="identificacion">Número de Identificación:</label>
                <input type="number" id="numeroIdentificacion" name="numeroIdentificacion" required><br><br>

                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required><br><br>

                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required><br><br>

                <label for="rol">Rol:</label>
                <select id="rol" name="rol" required>
                    <option value="paciente">Paciente</option>
                    <option value="medico">Médico</option>
                </select><br><br>
                <input type="submit" value="Registrar">
            </form>
        </div>
       </div>
    </main>
</body>

</html> 