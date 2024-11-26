<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE registros SET nombre='$nombre', email='$email', telefono='$telefono' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente";
    } else {
        echo "Error actualizando el registro: " . $conn->error;
    }

    $conn->close();
    header("Location: tabla.php");
    exit();
}
?>
