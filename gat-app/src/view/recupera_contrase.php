<?php require '../routes/configroutes.php'?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="style/conrecupe.css">
</head>
<body>
    <div class="container">
        <img src="image/password.png" alt="Logo">
        <h2>Recuperar Contraseña</h2>
        <form action="recuperar.php" method="post">
            <input type="text" name="username" placeholder="Ingrese su nombre de usuario" required>
            <input type="submit" value="Enviar">
        </form>
        <a href="../../index.php" class="login-link">Inicia sesión</a>
    </div>

    
</body>
</html>
