<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPRESA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">

</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Regístrate para poder iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <!--Formulario de login-->
                <form action="login.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesión</h2>
                    <input type="email" name="correo_electronico" placeholder="Correo Electrónico" required>
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                    <input type="password" name="clave" placeholder="Clave Cifrada" required>
                    <button type="submit">Entrar</button>
                </form>
                <!--formulario de registro-->
                <form action="register.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" name="nombre_completo" placeholder="Nombre Completo" required>
                    <input type="email" name="correo_electronico" placeholder="Correo Electrónico" required>
                    <input type="text" name="codigo_trabajador" placeholder="Código de Trabajador" required>
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                    <button type="submit">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>

