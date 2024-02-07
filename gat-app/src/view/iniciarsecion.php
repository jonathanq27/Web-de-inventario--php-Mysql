

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="src/view/style/style.css">
</head>
<body>
    <div class="container">
        <div class="login-container">
        
            <h2>Iniciar Sesión</h2>
            <img src="src/view/image/user.png" alt="Usuario" class="user-icon">
            <?php include './src/routes/configroutes.php';?>
            <form action="<?php echo Rutasvista?>iniciarsecion.php" method="post">
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
            
                <a href="<?php echo Rutasvista; ?>recupera_contrase.php">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
        
    </div>
    <?PHP require 'footer.php' ?>
    
</body>
</html>
