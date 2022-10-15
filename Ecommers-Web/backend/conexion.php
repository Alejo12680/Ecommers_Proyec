<?php

function conectar() {
    $host = "localhost";
    $user = "alejandror";
    $pass = "";
    $bases = "postrodent";

    $con = mysqli_connect($host, $user, $pass);
    
    mysqli_select_db($con, $bases);

    return $con;
}

?>
