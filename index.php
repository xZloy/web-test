<?php
        session_start();
        if(isset($_SESSION['correo']) && isset($_SESSION['user'])){
            $correo = $_SESSION['correo'];
            $user = $_SESSION['user'];
        }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florería Margarita</title>
    <link rel="stylesheet" href="styles.css?1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="img/logo.jpg" type="image/x-icon"/>
</head>
<body>
    <header>
        <div class="banner">
            <h1>Florería Margarita</h1>
            <p>Tu destino para las flores más hermosas</p>
        </div>
        <nav>
            <ul>
                <?php if(!isset($_SESSION['correo'])){?>
                    <li><a href="login.html"><i class="fa-solid fa-user"></i></a></li>
                    <li><a href="registro.html"><i class="fa-solid fa-address-card"></i></a></li>
                <?php }?>
                <?php if(isset($_SESSION['correo'])){?>
                    <li><a href=""><?php echo "$user";?></a></li>
                    <li><a href="close.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                    <?php } ?>
            </ul>
        </nav>
    </header>
    <section class="banner">
        <img src="img/baner.jpg" alt="Publicidad">
    </section>
    <main>
        <section>
            <img src="img/flor1.png" alt="Flor 1">
            <h2>Rosa Eterna</h2>
            <p>Esta hermosa rosa eterna es el regalo perfecto para expresar tu amor y cariño.</p>
        </section>
        <section>
            <img src="img/flor2.jpg" alt="Flor 2">
            <h2>Lirio Blanco</h2>
            <p>El lirio blanco simboliza pureza y paz, haciendo de él un detalle encantador para cualquier ocasión.</p>
        </section>
        <section>
            <img src="img/flor3.jpg" alt="Flor 3">
            <h2>Girasol Brillante</h2>
            <p>El girasol brillante representa la felicidad y la energía positiva, perfecto para alegrar el día de alguien especial.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Florería Margarita. Todos los derechos reservados.</p>
    </footer>
</body>
</html>