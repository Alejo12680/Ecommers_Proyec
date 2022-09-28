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
    <link rel="stylesheet" href="../css/nosotros.css">
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
    <main>
        <!-- Seccion del Documento -->

        <h1>Nosotros</h1>

        <img class="main_banner" src="../img/img_banner.jpg" alt="banner">

        <section class="main_docment">
            <article class="main_historis">

                <h2>Nuestra Historia</h2>
                <p>El laboratorio dental Prostodent fue fundado en el año 2014 en Bucaramanga Santander con el fin de atender los requerimientos solicitados por los odontólogos de la capital Santandereana, su fundador el señor Rodrigo Sánchez Mesa había formado una sociedad en años anteriores con otro de sus colegas,  pero al no llegar a acuerdos entre las partes la sociedad puso fin a ese proyecto, fue por esas razones que nació el Laboratorio Dental Prostodent.</p> 
            </article>

            <article class="main_container-mision">
                <img src="../img/mision.png" alt="Img-Mision">
                <h2>Misión</h2>
                <p>Somos un laboratorio dental dedicado a la elaboración de prótesis dentales con la más alta calidad en todos sus productos y siempre pensando en darle un enfoque personalizado a nuestros clientes y 
                satisfacer sus necesidades, utilizando los ecanismos y equipos de última generación.</p>
            </article>

            <article class="main_container-vision">
                <img src="../img/vision.png" alt="Img-Vision">
                <h2>Visión</h2>
                <p>Para el año 2023 seremos una empresa proyectada a nivel nacional cumpliendo con los más altos estándares de calidad en la norma ISO 9001 y ser reconocidos por nuestros productos y los mejores  servicios.</p>
            </article>

            <article class="main_container-valores">
                <img src="../img/valores.png" alt="Img-Valores">
                <h2>Valores</h2>
                <p>Nuestro valores es una determinación importante de nuestra empresa, para mirar al futuro con plena gratitud. Excelencia, Esfuerzo, Pasión, Trabajo Humildad, Integridad, Confianza y Lealtad.</p>
            </article>
        </section>

        <!-- finn de formulario -->
    </main>
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