<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_completo = $_POST['nombre_completo'];
    $correo_electronico = $_POST['correo_electronico'];
    $codigo_trabajador = $_POST['codigo_trabajador'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (nombre_completo, correo_electronico, codigo_trabajador, contrasena) VALUES ('$nombre_completo', '$correo_electronico', '$codigo_trabajador', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('Registro exitoso, En un periodo de 24 horas se revisara su solicitud de registro para ver si apto para entrar a
         la base de datos y si cumple con las caracteristicas se le enviara a su correo la clave para iniciar sesion'); 
         window.location.href = 'http://localhost/fercho/index.php'; </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if(!empty($nombre_completo && $correo_electronico && $codigo_trabajador && $contrasena)){
        $destino = "imai.padroni@gmail.com";
        $asunto = "Clave Predeterminada";
        $cuerpo = '
        <html>
            <head>
                <title>CORREO</title>
            </head>
            <body>
                <h2>Tu clave predeterminada es: $2y$10</h2>
                <h2>Email de: '.$nombre_completo.'</h2>
            </body>
        </html>
        ';
    //Para envio en formato en HTML
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    //Direccion del remitente
    $headers .= "From: $nombre_completo <$correo_electronico>\r\n";

    //Ruta del mensaje desde origen a destino
    $headers .= "Return-path: $destino\r\n";
    mail($destino, $asunto, $cuerpo, $headers);

    echo "Email enviado correctamente";
    }else{
        echo "Error al enviar el email";
    }

    $conn->close();
}
?>