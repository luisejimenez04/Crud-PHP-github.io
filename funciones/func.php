 <aside>
        <a href="index.php"><img src="img/usuario.png" alt="perfil" width="100px"></a>
        <h2>Hola!</h2>
        <nav>
            <ul>             
                <?php
                session_start();
                if($_SESSION['infoUser']['rol'] == 'medico' ){
                    ?>
                <li><a href="consultarCitas.php">Consultar citas</a></li>
                <li><a href="#">Resumen</a></li>
                    <?php                
                }
                ?>
                <?php
                if($_SESSION['infoUser']['rol'] == 'paciente' ){
                    ?>
                <li><a href="solicitudCitas.php">Solicitar</a></li>
                <li><a href="estadoCitas.php">Estado de cita</a></li>
                    <?php                
                }
                ?>

                

                
                
            </ul>
    </nav>
</aside>