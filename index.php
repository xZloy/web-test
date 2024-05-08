<?php
        session_start();
        if(isset($_SESSION['correo'])){
            $correo = $_SESSION['correo'];
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen ingreso</title>
    <link rel="stylesheet" href="style.css?1.0">
</head>
<body>
    <header>
        <?php if(!isset($_SESSION['correo'])){?>
        <div class="headerex">
            <a href="login.html">Iniciar sesion</a>
        <a href="registro.html">Registrarse</a>
        </div>
        <?php }?>
        <?php if(isset($_SESSION['correo'])){?>
            <div class="headerex">
            <a href="close.php">logout</a>
            <h4><?php echo "$correo"; ?></h4>
        </div>
        <?php } ?>
    </header>
        <h1>Floreria margarita </h1>
        <img class="banner " src="" alt="banner floreria">
        <div class="cont-p">
            <p>En floreria margarita ofrecemos precios accesibles para todo publico, nos preocupamos 
                por el consumidor y sus necesidades de regalar las mejores flores a sus seres queridos.
            </p>
            <img src="" alt="flor">
        </div>
        <div class="cont-p">
            <p>En floreria margarita ofrecemos precios accesibles para todo publico, nos preocupamos 
                por el consumidor y sus necesidades de regalar las mejores flores a sus seres queridos.
            </p>
            <img src="" alt="flor">
        </div>
        <div class="cont-p">
            <p>Conoce mas acerca de nuestros productos</p><br>
            <button><a href="prods.php">Ver productos</a></button>
            <img src="" alt="flor">
        </div>
</body>
</html>