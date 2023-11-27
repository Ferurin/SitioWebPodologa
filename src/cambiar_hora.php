<?php
include("validate.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nueva_fecha = $_POST["nueva_fecha"];
    $nueva_hora = $_POST["nueva_hora"];

    $fecha_actual = date("Y-m-d");
    $fecha_limite = strtotime($fecha_actual);
    $timestamp_seleccionado = strtotime($nueva_fecha);

    if ($timestamp_seleccionado <= $fecha_limite) {
        $mensaje = "La fecha seleccionada debe ser posterior al día de hoy.";
        echo '<script>alert("' . $mensaje . '");</script>';
        echo '<script>window.location.href = "user/administrar_cita.php";</script>';
        exit();
    }
    $hora_valida = date("H", strtotime($nueva_hora));
    if ($hora_valida < 10 || $hora_valida > 18) {
        $mensaje = "La hora debe estar entre las 10 AM y las 6 PM.";
        echo '<script>alert("' . $mensaje . '");</script>';
        echo '<script>window.location.href = "user/administrar_cita.php";</script>';
        exit();
    }

    $sql = "UPDATE hora SET fecha = '$nueva_fecha', hora_fecha = '$nueva_hora' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: user/administrar_cita.php");
        exit();
    } else {
        echo "Error al actualizar la fecha y hora: " . $conn->error;
    }
}
