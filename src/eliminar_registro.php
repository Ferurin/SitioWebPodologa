<?php
include("validate.php");
if (isset($_POST['id'])) {
    $id_a_eliminar = $_POST['id'];
    $sql_eliminar = "DELETE FROM hora WHERE id = $id_a_eliminar";

    if ($conn->query($sql_eliminar) === TRUE) {
        header('Location: user/administrar_cita.php');
        exit();
    } else {
        echo "Error al intentar eliminar el registro: " . $conn->error;
    }
} else {
    echo "No se recibió el ID del registro a eliminar.";
}
?>