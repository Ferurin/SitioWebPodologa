<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        empty($_POST['nombre']) ||
        empty($_POST['apellido']) ||
        empty($_POST['RUN']) ||
        empty($_POST['correo']) ||
        empty($_POST['contrasegna']) ||
        empty($_POST['fecha_nacimiento']) ||
        empty($_POST['telefono'])
    ) {
        $mensaje = "Por favor complete todos los campos.";
        echo '<script>alert("' . $mensaje . '");</script>';
        header("Location: register.php");
        exit();
    } else {
        include 'validate.php';
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellido'];
        $RUN = $_POST['RUN'];
        $correo = $_POST['correo'];
        $contrasegna = $_POST['contrasegna'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $telefono = $_POST['telefono'];
        $mysqli = new mysqli("cs.ilab.cl", "2_BD_58", "2_BD_58", "2_BD_58");
        $sql = "INSERT INTO paciente (nombre, apellidos, RUN, correo, contrasegna, fecha_nacimiento, telefono) 
                VALUES ('$nombre', '$apellidos', '$RUN', '$correo', '$contrasegna', '$fecha_nacimiento', '$telefono')";

        if ($mysqli->query($sql) === TRUE) {
            $mensaje = "¡Registro exitoso para el usuario $nombre con el correo $correo!";
            echo '<script>alert("' . $mensaje . '");</script>';
            $mysqli->close();
            header("location: login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }  
}
?>
