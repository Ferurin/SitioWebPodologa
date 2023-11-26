<?php
    include("validate.php");
    $fecha_actual = date("Y-m-d");
    $motivo = $_POST['consult'];
    // echo "$motivo";
    $comentarios =$_POST['comment'];
    // echo "$comentarios";
    $fecha = $_POST['date'];
    // echo "$fecha";
    $hora = $_POST['time'];
    // echo "$hora";
    $ciudad = $_POST['city'];
    // echo "$ciudad";
    $direccion = $_POST['direction'];
    // echo "$direccion";
    /*exit;*/
    $sql_consulta = "INSERT INTO consulta_medica(costo, paciente_correo, admin_correo) values(null, '" . $_SESSION["correo"] . "', 'marcelabri@gmail.com');";
    
    if ($conn->query($sql_consulta) === TRUE) {
        echo "Registro de consulta insertado correctamente";
    } else {
        echo "Error (Consulta: " . $conn->error;
    }
    /*
    if (strtotime($fecha_cita) < strtotime($fecha_actual)) {
    // La fecha de la cita es anterior a la fecha actual, lo que no está permitido.
        echo "La fecha de la cita no puede ser el día anterior al actual.";
    } else {
    // La fecha de la cita es válida.
    // Aquí puedes continuar con el proceso de agendar la cita.
            }
     */
    
    $sql_id_consulta = "SELECT id FROM consulta_medica order by id desc limit 1;";
    $query_id_consulta = mysqli_query($conn, $sql_id_consulta);

    $id_consulta = -1;
    if (mysqli_num_rows($query_id_consulta) > 0) {
        $fila = mysqli_fetch_assoc($query_id_consulta);
        $id_consulta = $fila["id"];
    }
    else {
        echo "Error (Consulta ID: " . $conn->error;
    }

    if ($id_consulta != -1) {
        $sql_hora = "INSERT INTO hora(hora_fecha, motivo, comentario, fecha, ciudad, direccion, consulta_medica_id) VALUES (" . 
    "'" . $hora . "', '" . $motivo . "', '" . $comentarios . "', '" . $fecha . "', '" . $ciudad . "', '" . $direccion . "', " . $id_consulta . ");";
        if ($conn->query($sql_hora) === TRUE){
            $mensaje = "Se ha reservado la hora correctamente";
            echo '<script>alert("' . $mensaje . '");</script>';
        } else {
            echo "Error (Hora): " . $conn->error;
        }
    }  
    mysqli_close($conn);
    ?>