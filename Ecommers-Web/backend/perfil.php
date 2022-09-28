<?php

session_start();
include("../backend/cantidad.php");
include("./conexion.php");
$con = conectar();

$correo = $_SESSION['usario'];
if (!isset($correo)) {
    header("Location: ../login.html");
}

$sql = "SELECT * FROM `usuario` WHERE correo_user = '$correo'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="../css/perfiles.css">
    <link rel="shortcut icon" href="../img/icono.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Link para el icono del cart -->
    <script src="https://kit.fontawesome.com/e50b9ae23a.js" crossorigin="anonymous"></script> <!-- Link para iconos de footer social red -->
</head>
<body>
    <header>
        <nav>
            <ul class="nav_left">
                <li class="nav_section-logo"><a href="../frontend/index_2.html"><img src="../img/logo-nav.png" alt="Logotipo de ProstoDent" title="Logotipo ProstoDent"></a></li>
                <li><a href="../frontend/index_2.php">Inicio</a></li>
                <li><a href="../frontend/productos.php">Productos</a></li>
                <li><a href="../frontend/contactanos_2.php">Contactanos</a></li>
                <li><a href="../frontend/nosotros_2.php">Nosotros</a></li>
            </ul>          
        
            <section class="nav_right">
                <a href="./perfil.php"><i class="fa-solid fa-user-astronaut"></i></a>
                <a href="../frontend/carrito.php"><i class="fa-solid fa-cart-shopping"></i></a>
                <p><?php echo $totalCantidad; ?></p>
            </section> 
        </nav>
    </header>
    <main>
        
        <!-- Inicio del contenido -->
        <h1>Perfil</h1>

        <section class="main_containar">
            <section class="main_perfil">
                <h2><?php echo $row["nombre_user"]." ".$row["apellido_user"]; ?></h2>
                <span><i class="fa-solid fa-user-astronaut"></i></span>
                <button type="submit"><a href="../backend/cerrar_sesion.php">Cerrar Sesión</a></button>
            </section>
    
            <section class="main_table">
                <table>
                    <caption><h3>Datos de la Cuenta</h3></caption>
                    <tr>
                        <th>Usuario: </th>
                        <td><?php echo $row["nombre_user"]; ?></td>
                    </tr>
    
                    <tr>
                        <th>Email: </th>
                        <td><?php echo $row["correo_user"]; ?></td>
                    </tr>
                </table>
    
                <table>
                    <caption><h3>Datos Personales</h3></caption>
                    <tr>
                        <th>Nombre: </th>
                        <td><?php echo $row["nombre_user"]; ?></td>
                    </tr>

                    <tr>
                        <th>Apellido: </th>
                        <td><?php echo $row["apellido_user"]; ?></td>
                    </tr>
    
                    <tr>
                        <th>Documento: </th>
                        <td><?php echo $row["documento_user"]; ?></td>
                    </tr>
    
                    <tr>
                        <th>Ciudad: </th>
                        <td><?php echo $row["ciudad_user"]; ?></td>
                    </tr>
    
                    <tr>
                        <th>Telefono: </th>
                        <td><?php echo $row["telefono_user"]; ?></td>
                    </tr>
                </table>
            </section>

        </section>

        <!-- Fin del contenido -->


    </main>
    <footer>
        <section class="footer_logo">
            <img src="../img/logo-footer.png" alt="Logo de pie de Página" title="Logo Pie de Página">
        </section>
        <nav>
            <ul class="nav_section-footer">
                <li><a href="../frontend/nosotros_2.php">Nosotros</a></li>
                <li><a href="../frontend/productos.php">Productos</a></li>
                <li><a href="../frontend/contactanos_2.php">Contactanos</a></li>
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