<?php
include 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM registros WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado exitosamente";
} else {
    echo "Error eliminando el registro: " . $conn->error;
}

$conn->close();
header("Location: Tabla.php");
exit();
?>
