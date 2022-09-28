<?php

    if (isset($_SESSION['carrito'])) {
        $carrito = $_SESSION['carrito'];
    }

    //Contamos productos    
    if (isset($_SESSION['carrito'])) {
        for ($i=0; $i <= count($carrito)-1 ; $i++) { 
            if (isset($carrito[$i])) {
                if ($carrito[$i] != NULL) {
                    if (!isset($carrito['cantidad'])) {
                            $carrito['cantidad'] = '0';
                        }
                        else {
                            $carrito['cantidad'] = $carrito['cantidad'];
                        }
                        $total_cantidad = $carrito['cantidad'];
                    
                    $total_cantidad ++;   
                    if (!isset($totalCantidad)) {
                        $totalCantidad = '0';
                    }
                    else {
                        $totalCantidad = $totalCantidad;
                    }
                    $totalCantidad += $total_cantidad;   
                }
            }
        }    
    }            

    //Declaricion de variables
    if (!isset($totalCantidad)) {
        $totalCantidad = "";
    }
    else {
        $totalCantidad = $totalCantidad;
    }
    
?>