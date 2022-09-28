<?php

include("./conexion.php");
$con = conectar();
session_start();

if (isset($_POST["submit"]) ) {

    $id = $_POST["id_pedido"]; #Es el nombre del id de la tabla de phpmyadmin.
    $nombre_pedido = $_POST["nombre_pedido"];
    $precio_pedido = $_POST["precio_pedido"];
    $cantidad_pedido = $_POST["cantidad_pedido"];
    $total_pedido = $_POST["total_pedido"];
    $id_usuario = $_POST["id_ususario"];

    echo $nombre_pedido;

    $sql = "INSERT INTO pedido VALUES('$id','$nombre_pedido','$precio_pedido','$cantidad_pedido','$total_pedido','$id_usuario')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        unset($_SESSION['carrito']);
        echo '<script type="text/javascript">
            alert("Su compra a sido Efectiva");
            window.location.href="../frontend/carrito.php";
            </script>';
    }

}

?>