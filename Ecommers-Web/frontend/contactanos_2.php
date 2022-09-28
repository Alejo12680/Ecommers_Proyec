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
    <link rel="stylesheet" href="../css/contacto.css">
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

        <img class="main_banner" src="../img/img_banner_contacto.png" alt="banner">

        <section class="main_center">
            <h1>Contactanos</h1>
            <p>Llenas tus datos y nos estaremos comunicando con tigo a la brevedad</p>
        </section>

        <section class="main_contenido">

            <section class="main_form">
                <form method="POST" action="../backend/email.php" class="form_contacto" id="Enviar">
                    <label for="nombre">Nombre y Apellido</label>
                    <input type="text" name="nombre_apellido" placeholder="Nombre y Apellido" required>

                    <label for="ciudad">Ciudad</label>
                    <select name="ciudad" id="ciudad">
                        <option value="" selected="selected">Seleccione</option>
                    </select>
    
                    <label for="correo">Correo Electronico</label>
                    <input type="email" placeholder="Correo Electronico" name="correo" required>

                    <label for="asunto">Asunto</label>
                    <input type="text" placeholder="Asunto" name="asunto" required>
    
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" cols="30" rows="4" sentences placeholder="Mensaje" required></textarea>   
                    
                    <button type="submit" title="Enviar" name="enviar" onclick="validacion()">Enviar</button>
                </form>
            </section>

            <section class="main_contacto">
                <h2>Comunicate</h2>
                <p>Datos</p>

                <div class="raw1">
                    <img src="../img/contacto-mobie.png" alt="icono movil">
                    <p>+57 305-755-9889</p>
                </div>

                <div class="raw1">
                    <img src="../img/contacto-email.png" alt="icono emal">
                    <p>odontoprostodent@prostodent.com</p>
                </div>

                <div class="raw1">
                    <img src="../img/contacto-map.png" alt="icono addres">
                    <p>Bucaramanga - Florida Blnaca <br> Carrera 15 # 10-94</p>
                </div>
            </section>
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
    <script src="../js/validacion_contac.js"></script>
    <script src="../js/orden_ciudad.js"></script>
</body>
</html>