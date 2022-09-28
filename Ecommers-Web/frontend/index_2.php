<?php

session_start();
include("../backend/cantidad.php");
include("../backend/conexion.php");
$con = conectar();

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="odontologia, protesis ental, sena dental, dientes">
    <meta name="robots" content="index,follow">
    <meta name="description" content="Laboratorio ProstoDent, esta ubicado en Bucaramanga-Santander,donde suple el mercado de Protesis, Herramientas Dentales, Maquinaria Dental y Productos Dentales.">
    <meta name="author" content="Fabio Alejandro Ramirez Saavedra">
    <meta name="copyright" content="Propietario del copyright">
    <title>ProstoDent</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/pages_2.css">
    <link rel="shortcut icon" href="../img/icono.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Link para el icono del cart -->
    <script src="https://kit.fontawesome.com/e50b9ae23a.js" crossorigin="anonymous"></script> <!-- Link para iconos de footer social red -->
</head>
<body>
    <header>
        <nav>
            <ul class="nav_left">
                <li class="nav_section-logo"><a href="./index_2.php"><img src="../img/logo-nav.png" alt="Logotipo de ProstoDent" title="Logotipo ProstoDent"></a></li>
                <li><a href="./index_2.php">Inicio</a></li>
                <li><a href="./productos.php">Productos</a></li>
                <li><a href="./contactanos_2.php">Contactanos</a></li>
                <li><a href="./nosotros_2.php">Nosotros</a></li>
            </ul>          

            <section class="nav_right">
                <a href="../backend/perfil.php"><i class="fa-solid fa-user-astronaut"></i></a>
                <a href="./carrito.php"><i class="fa-solid fa-cart-shopping"></i></a>
                <p><?php echo $totalCantidad; ?></p>
            </section> 
        </nav>
    </header>

    <!-- Inicio del Main -->
    <main>
        
        <section class="main_text">
            <h1>Bienvenido</h1>
            <p>Nos alegra de tenerte aquí. ProstoDent es un laboratorio odontologico dedicado a la elaboración de prótesis dentales con la más alta calidad, en todos nuestros productos y siempre pensando en darle un enfoque personalizado, con el fin de satisfacer sus necesidades. Te invitamos a que te registres y seas parte de grandes descuentos.</p>
        </section>
    </main>

    <!-- Fin Del Main -->
    <footer>
        <section class="footer_logo">
            <img src="../img/logo-footer.png" alt="Logo de pie de Página" title="Logo Pie de Página">
        </section>
        <nav>
            <ul class="nav_section-footer">
                <li><a href="./nosotros_2.php">Nosotros</a></li>
                <li><a href="./productos.php">Productos</a></li>
                <li><a href="./contactanos_2.php">Contactanos</a></li>
            </ul>
        </nav>
        <hr>
        <section class="footer_contact">
            <div class="footer_contact-copyright">
                <p>&copy; 2022 ProstoDent. All rights reserved</p>
            </div>
                <ul class="nav_section-contact"> <!-- clases de iconos redes sociales fontAwesome -->
                    <span><i class="fa-brands fa-facebook"></i></span>
                    <span><i class="fa-brands fa-instagram"></i></span>
                    <span><i class="fa-brands fa-whatsapp"></i></span>
                </ul>
        </section>
    </footer>
    
</body>
</html>