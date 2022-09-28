<?php

session_start();

$correo = $_SESSION['usario'];
if (isset($correo)) {
    session_destroy();
    header("Location: ../index.html");
}

?>