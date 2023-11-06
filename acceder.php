<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="acceder.css">
</head>
<body>
    <form action="procesar_login.php" method="post">
    <img src="tabernero2.png" alt="Logo de la página" class="logo">
    <div class="login-container">
        <div class="background-image">
            <h2>Iniciar Sesión</h2>
                <div class="input-group">
                    <label for="username">Nombre de usuario:</label>
                    <input type="text" name="usuario" id="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="contraseña" id="password" required>
                </div>
                <button type="submit">Iniciar Sesión</button>
            <p>¿No tienes una cuenta? <a href="registro.html">Registrarse</a></p>
        </div>
    </div>
    </form>
</body>
</html>