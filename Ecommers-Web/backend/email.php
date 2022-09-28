<?php

$destino = "alejo152725@gmail.com";

$nombre = $_POST["nombre_apellido"];
$ciudad = $_POST["ciudad"];
$correo = $_POST["correo"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

$header = "Enviado desde la pagina de Prostodent";
$email_complete = "\nNombre: ".$nombre. "\nCiudad: ". $ciudad ."\nEmail: ". $correo. "\nMensaje: " .$mensaje;

mail($destino, $asunto, $header, $email_complete);

echo '<script type="text/javascript">
alert("Correo Enviado Exitosamente");
window.location.href="../frontend/index_2.php";
</script>';

?>