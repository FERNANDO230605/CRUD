<?php
include 'conexion.php';

$id = $_GET['id'];
$sql = "SELECT * FROM registros WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Registro</title>
</head>
<body>
    <h2>Editar Registro</h2>
    <form action="actualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>" required>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
