<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Registros</title>
    <link rel="stylesheet" href="assets/css/tabla.css">
</head>
<body>
    <div class="registros">
    <center><h2>REGISTROS</h2></center>
    <center><form action="agregar.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="submit" value="Agregar">
    </form></center>
    </div>
    <center><div class="card">
    <h2>LISTA DE REGISTROS</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acción</th>
        </tr>
        <?php
        include 'conexion.php';
        $sql = "SELECT * FROM registros";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["nombre"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["telefono"] . "</td>
                        <td>
                            <a href='editar.php?id=" . $row["id"] . "'>Editar</a>
                            <a href='eliminar.php?id=" . $row["id"] . "'>Eliminar</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay registros</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    </div></center>
</body>
</html>
