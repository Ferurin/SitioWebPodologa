<?php
include("validate.php");
$fecha_actual = date("Y-m-d");
$fecha_limite = strtotime($fecha_actual);
$motivo = $_POST['consult'];
$comentarios = $_POST['comment'];
$fecha = $_POST['date'];
$hora = $_POST['time'];
$ciudad = $_POST['city'];
$direccion = $_POST['direction'];
$timestamp_seleccionado = strtotime($fecha);

if ($timestamp_seleccionado > $fecha_limite) {
    if (!empty(trim($direccion))) {
        $sql_consulta = "INSERT INTO consulta_medica(costo, paciente_correo, admin_correo) VALUES (null, '" . $_SESSION["correo"] . "', 'marcelabri@gmail.com');";
        if ($conn->query($sql_consulta) === TRUE) {
            $id_consulta = $conn->insert_id;
            $sql_hora = "INSERT INTO hora(hora_fecha, motivo, comentario, fecha, ciudad, direccion, consulta_medica_id) VALUES (" .
                "'" . $hora . "', '" . $motivo . "', '" . $comentarios . "', '" . $fecha . "', '" . $ciudad . "', '" . $direccion . "', " . $id_consulta . ");";

            if ($conn->query($sql_hora) === TRUE) {
                $mensaje = "Se ha reservado la hora correctamente";
                echo '<script>alert("' . $mensaje . '");</script>';
                echo '<script>window.location.href = "user/administrar_cita.php";</script>';
            } else {
                echo "Error (Hora): " . $conn->error;
            }
        } else {
            echo "Error (Consulta): " . $conn->error;
        }
    } else {
        $mensaje = "Por favor, ingrese una dirección válida.";
        echo '<script>alert("' . $mensaje . '");</script>';
        echo '<script>window.location.href = "user/appointment.php";</script>';
    }
} else {
    $mensaje = "La fecha seleccionada debe ser posterior al día de hoy. Por favor, elija una fecha válida.";
    echo '<script>alert("' . $mensaje . '");</script>';
    echo '<script>window.location.href = "user/appointment.php";</script>';
}
mysqli_close($conn);
