<?php

include("./conexion.php");
$con = conectar();

session_start();

$correo = $_POST["usuario"];
$password = $_POST["password"];

$sql = "SELECT * FROM `usuario` WHERE correo_user = '$correo' AND contrasena_user = '$password'";
$query = mysqli_query($con, $sql);
$fila = mysqli_num_rows($query);

if ($fila > 0) {
    $_SESSION['usario']= $correo; #creacion de variable de sesion llamda usuario.
    header("Location: ../frontend/index_2.php");
}
else {
    echo '<script type="text/javascript">
    alert("Usuario no encontrado\nVerifica los Datos Ingresados");
    window.location.href="../login.html";
    </script>';
}

?>