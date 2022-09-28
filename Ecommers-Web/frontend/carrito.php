<?php

session_start();
include("../backend/cantidad.php");
include("../backend/conexion.php");
$con = conectar();

$correo = $_SESSION['usario'];

$sql = "SELECT * FROM `usuario` WHERE correo_user = '$correo'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($query);
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
    <link rel="stylesheet" href="../css/carrito.css">
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
        
        <!-- Inicio del contenido -->

        <section class="main_title">
            <h1>Carrito de Compras</h1>
            <a href="./productos.php"><button>Seguir Haciendo Compras</button></a>
        </section>
    
        <section class="main_table">
            <table frame ="void" rules="rows">
                <tr>
                    <th><h3>Producto</h3> </th>
                    <th><h3>Precio</h3> </th>
                    <th><h3>Cantidad</h3> </th>
                    <th><h3>Subtotal</h3> </th>
                </tr>
                <?php

                /* $carrito = $_SESSION['carrito']; */
                if (isset($_SESSION['carrito'])) {
                    $total = 0;
                    for ($i=0; $i <= count($carrito) -1; $i++) {
                        if (isset($carrito[$i])) {
                            if ($carrito[$i] != NULL) {                      

                ?>

                    <tr>
                        <td><?php echo $carrito[$i]["producto"]; ?></td>
                        <td>$ <?php echo $carrito[$i]["precio"]; ?></td>
                        <td><?php echo $carrito[$i]["cantidad"]; ?></td>
                        <td><?php echo number_format($carrito[$i]["precio"] * $carrito[$i]["cantidad"],3); ?></td>

                    </tr>

                <?php
                $total = $total + ($carrito[$i]["precio"] * $carrito[$i]["cantidad"]);

                            }               
                        }
                    }
                }
                ?>

                <tr>
                    <th>Total</th>
                    <td><?php 
                    if (isset($_SESSION['carrito'])) {
                    $total = 0;
                    for ($i=0; $i <= count($carrito) -1; $i++) {
                        if (isset($carrito[$i])) {
                    if ($carrito[$i] != NULL) { 
                        $total = $total + ($carrito[$i]["precio"] * $carrito[$i]["cantidad"]);
                                }
                            }
                        }
                    }
                    if (!isset($total)) {
                        $total = 0;
                    }
                    else {
                        $total = $total;
                    }

                    echo "$ " . number_format($total,3);
                    ?></td> 
                </tr>

                <tr>
                    <th>
                        <a href="../backend/borrar_carrito.php"><i class="fa-solid fa-trash-can"></i> Vaciar Carrito</a>
                    </th>
                </tr>
            </table>

        </section>

        <section class="main_button-end">
            <?php
            if (isset($_SESSION['carrito'])) {
                $total = 0;
                for ($i=0; $i <= count($carrito) -1; $i++) {
                    if (isset($carrito[$i])) {
                if ($carrito[$i] != NULL) { 
                    $total = $total + ($carrito[$i]["precio"] * $carrito[$i]["cantidad"]);
            ?>
            <form action="../backend/create_pedido.php" method="POST">
                <input type="hidden" name="nombre_pedido" value="<?php echo $carrito[$i]["producto"]; ?>">
                <input type="hidden" name="precio_pedido" value="<?php echo $carrito[$i]["precio"]; ?>">
                <input type="hidden" name="cantidad_pedido" value="<?php echo $carrito[$i]["cantidad"]; ?>">
                <input type="hidden" name="total_pedido" value="<?php echo number_format($carrito[$i]["precio"] * $carrito[$i]["cantidad"],3); ?>">
                <input type="hidden" name="id_ususario" value="<?php echo $row['id_usuario']?>">

            <?php
                        }
                    }
                }
            }
            ?>

                <button type="submit" name="submit" >Comprar</button>
            </form>
            
        </section>

        <!-- Fin del contenido -->


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