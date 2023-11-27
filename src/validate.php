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
            header("location: ../src/user/appointment.php");
        } else {
            $_SESSION["correo"] = $correo;
            header("location: ../index.php");
        }
    } else {
    }
}
