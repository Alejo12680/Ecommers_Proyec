<?php

session_start();

unset($_SESSION['carrito']);
header("Location: ".$_SERVER['HTTP_REFERER']."");

?>