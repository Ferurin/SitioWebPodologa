<?php
function connect()
{
    $host = 'cs.ilab.cl';
    $user = '2_BD_58';
    $password = '2_BD_58';
    $bd = '2_BD_58';
    $conn = mysqli_connect($host, $user, $password);

    mysqli_select_db($conn, $bd);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    return $conn;
}
