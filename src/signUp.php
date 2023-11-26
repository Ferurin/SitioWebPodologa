<?php
$mysqli = new mysqli("localhost","root","","sitiowebmarcela");

$nombre = $_POST['nombre'];
echo "$nombre";
$apellidos =$_POST['apellidos'];
echo "$apellidos";
$RUN = $_POST['RUN'];
echo "$RUN";
$correo = $_POST['correo'];
echo "$correo";
$contrasegna = $_POST['contrasegna'];
echo "$contrasegna";
$fecha_nacimiento = $_POST['fecha_nacimiento'];
echo "$fecha_nacimiento";
$telefono = $_POST['telefono'];
echo "$telefono";
    
$sql = "INSERT INTO paciente (nombre, apellidos, RUN, correo, contrasegna, fecha_nacimiento, telefono) VALUES ('$nombre', '$apellidos', '$RUN', '$correo', '$contrasegna', '$fecha_nacimiento', '$telefono')";

if (!mysqli_query($mysqli, $sql)) {
    die("Error: " . mysqli_error($mysqli));
}
mysqli_close($mysqli);
header("location: login.php");
?>