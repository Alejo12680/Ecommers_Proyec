<?php
session_start();

if (isset($_SESSION['carrito']) || isset($_POST['producto'])) {
    if (isset($_SESSION['carrito'])) {
        $carrito = $_SESSION['carrito'];
        if (isset($_POST['producto'])) {
            $id = $_POST["id"];
            $nombre = $_POST["producto"];
            $precio = $_POST["precio"];
            $cantidad = $_POST["cantidad"];
            $donde = -1; 

            for($i=0;$i<=count($carrito)-1;$i ++){
                if($id==$carrito[$i]['id']){
                    $donde=$i;  
                }
            }
            
            if ($donde != -1) {
                $cuanto = $carrito[$donde]['cantidad'] + $cantidad;
                $carrito[$donde] = array("id"=>$id,"producto"=>$nombre, "precio"=>$precio, "cantidad"=>$cuanto);
            }
            else {
                $carrito[] = array("id"=>$id,"producto"=>$nombre, "precio"=>$precio, "cantidad"=>$cantidad);
            }
        }
    }
    else {
        $id = $_POST["id"];
        $nombre = $_POST["producto"];
        $precio = $_POST["precio"];
        $cantidad = $_POST["cantidad"];
        $carrito[] = array("id"=>$id,"producto"=>$nombre, "precio"=>$precio, "cantidad"=>$cantidad);
    }

$_SESSION['carrito'] = $carrito;

}

header("Location: ".$_SERVER['HTTP_REFERER']."");


?>