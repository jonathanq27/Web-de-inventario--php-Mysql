

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="/src/style/style.css">
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2>Iniciar Sesión</h2>
            <img src="src/view/image/user.png" alt="Usuario" class="user-icon">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Iniciar Sesión</button>
            </form>
            <div class="additional-links">
                <a href="src/view/index.html">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
        
    </div>
    
    
</body>
</html>
