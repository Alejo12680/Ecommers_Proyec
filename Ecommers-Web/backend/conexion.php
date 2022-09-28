<?php

function conectar() {
    $host = "localhost";
    $user = "alejandror_alejandror";
    $pass = "36Mx8eS=!avz";
    $bases = "alejandror_jhfyred7669";

    $con = mysqli_connect($host, $user, $pass);
    
    mysqli_select_db($con, $bases);

    return $con;
}

?>