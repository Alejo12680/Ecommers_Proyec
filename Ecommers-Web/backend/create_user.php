<?php

include("./conexion.php");
$con = conectar();

if (isset($_POST["submit"]) ) {

    $id = $_POST["id_usuario"]; #Es el nombre del id de la tabla de phpmyadmin.
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $documento = $_POST["documento"];
    $ciudad = $_POST["ciudad"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["email"];
    $password = $_POST["contrasena"];

    $sql = "INSERT INTO usuario VALUES('$id','$nombre','$apellidos','$documento','$ciudad','$telefono','$correo','$password')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: ../login.html");
    }
    else {
        header("Location: ../registro.html");
    }

}

?>