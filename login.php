<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MatchCarga</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="icono.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <a href="index.php" class="logo-container">
                <img src="img/Logo1.png" alt="Logo MatchCarga" class="logo grow">
            </a>
            <p>¿No tiene una cuenta?</p>
            <button id="toggle-form-btn" class="btn-primary">Registrarse</button>
            <p>Únase a trabajar con nosotros y conecte cargas con transportadores de manera eficiente.</p>
        </div>
        <div class="right-side">
            <div class="form-container">
                <form id="auth-form" action="php/validar.php" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <label for="username">Usuario</label>
                    <input type="text" id="username" name="username" required>
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                    <button type="submit" class="btn-primary">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/login.js"></script>
</body>
</html>