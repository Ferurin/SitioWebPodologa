<?php
function connect(){
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $bd = 'sitiowebmarcela';
    $conn = mysqli_connect($host, $user, $password);

    mysqli_select_db($conn, $bd);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    return $conn;
}
?>