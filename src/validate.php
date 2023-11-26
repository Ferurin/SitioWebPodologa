<?php
include("connection.php");
$conn = connect();
session_start();

$actualURL = "$_SERVER[REQUEST_URI]";
if ($_SERVER['REQUEST_METHOD'] === 'POST' and $actualURL !== "/podologa/src/cita.php") { 
    $correo = $_POST["correo"];
    $pwd = $_POST["contrasegna"];
    $sql = "SELECT correo , contrasegna, nombre from paciente where correo = '$correo';";
    $query = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($query) > 0) {
    $fila = mysqli_fetch_assoc($query);
        if ($pwd === $fila["contrasegna"]) {
            $_SESSION["correo"] = $correo;
            $_SESSION["nombre"] = $fila["nombre"];
            header("location: ../src/User/appointment.php");
        } else {
            $_SESSION["correo"] = $correo;
            header("location: ../index.php");
        }
    } else {
        
    }
}
/*if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $correo = $_POST["correo"];
    $pwd = $_POST["contrasegna"];
    $sql = "SELECT correo, contrasegna, nombre FROM paciente WHERE correo = '$correo' AND contrasegna = '$contrasegna';";
    $query = mysqli_query($conn, $sql);
    
    $response = [];  
    if (mysqli_num_rows($query) > 0) {
        $fila = mysqli_fetch_assoc($query);
        if ($pwd === $fila["contrasegna"]) {
            $_SESSION["correo"] = $correo;
            $_SESSION["nombre"] = $fila["nombre"];
            $response['success'] = true;
            $response['message'] = 'Inicio de sesión exitoso';
            $response['redirect'] = '../src/User/appointment.php';
        } else {
            $response['success'] = false;
            $response['message'] = 'Error al iniciar sesión. Reingrese los datos';
            $response['redirect'] = '../index.php';
        }
    } else {
        $response['success'] = false;
        $response['message'] = 'Usuario no encontrado';
        $response['redirect'] = '../login.php';
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}?>*/
?>


