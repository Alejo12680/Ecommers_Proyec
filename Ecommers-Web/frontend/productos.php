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
    <link rel="stylesheet" href="../css/productos.css">
    <link rel="shortcut icon" href="../img/icono.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Link para el icono del cart -->
    <script src="https://kit.fontawesome.com/e50b9ae23a.js" crossorigin="anonymous"></script> <!-- Link para iconos de footer social red y fechas -->
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

        <!-- Inicio del contenido -->

        <section class="main_container">

            <section class="main_item" id="item_carrusel-1">
                <h1>Prótesis Dental con el 20% Descuento</h1>
                <section class="main_carrusel" id="carrusel-1">
                    <img src="../img/img_carrusel-1.jpg" alt="Imagen Carrusel-1">
                </section>
                <section class="fechas_carrusel">
                    <a href="#item_carrusel-4"><i class="fa-solid fa-angles-left"></i></a>
                    <a href="#item_carrusel-2"><i class="fa-solid fa-angles-right"></i></a>
                </section>
            </section>
            
            <section class="main_item" id="item_carrusel-2">
                <h1>Instrumento Dental con el 25% Descuento</h1>
                <section class="main_carrusel" id="carrusel-2">
                    <img src="../img/img_carrusel-2.jpg" alt="Imagen Carrusel-2">
                </section>
                <section class="fechas_carrusel">
                    <a href="#item_carrusel-1"><i class="fa-solid fa-angles-left"></i></a>
                    <a href="#item_carrusel-3"><i class="fa-solid fa-angles-right"></i></a>
                </section>
            </section>
            
            <section class="main_item" id="item_carrusel-3">
                <h1>Cepillos Dentales con el 20% Descuento</h1>
                <section class="main_carrusel" id="carrusel-3">
                    <img src="../img/img_carrusel-3.jpg" alt="Imagen Carrusel-3">
                </section>
                <section class="fechas_carrusel">
                    <a href="#item_carrusel-2"><i class="fa-solid fa-angles-left"></i></a>
                    <a href="#item_carrusel-4"><i class="fa-solid fa-angles-right"></i></a>
                </section>
            </section>

            <section class="main_item" id="item_carrusel-4">
                <h1>Pulidor Dental con el 30% Descuento</h1>
                <section class="main_carrusel" id="carrusel-4">
                    <img src="../img/img_carrusel-4.jpg" alt="Imagen Carrusel-4">
                </section>
                <section class="fechas_carrusel">
                    <a href="#item_carrusel-3"><i class="fa-solid fa-angles-left"></i></a>
                    <a href="#item_carrusel-1"><i class="fa-solid fa-angles-right"></i></a>
                </section>
            </section>

        </section>

        <section class="main_puntos">
            <a href="./estetico_dental.php">
                <div class="punto_estetico">
                    <img src="../img/estetica-dental.png" alt="img-Estetico">
                </div>
            </a>

            <a href="./instrumento_dental.php">
                <div class="punto_herramienta">
                    <img id="img1" src="../img/herrramienta-dental.png" alt="img-Herramientas">
                </div>
            </a>
            
            <a href="./quimico_dental.php">
                <div class="punto_quimico">
                    <img src="../img/quimicos-dental.png" alt="img-Quimicos">
                </div>
            </a>
            
            <a href="./protesis_dental.php">
                <div class="punto_protesis">
                    <img src="../img/protesis.png" alt="img- Protesis">
                </div>
            </a>
            
        </section>

        <section class="texto_puntos">
            <p>Estética Dental</p>
            <p>Instrumento Dental</p>
            <p>Químico Dental</p>
            <p>Prótesis Dentales</p>
        </section>


        <!-- finn del Documento -->
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