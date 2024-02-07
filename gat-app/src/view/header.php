<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encabezado con Imagen de Usuario</title>
     <?php require '../routes/configroutes.php' ?>
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <header>
       
        <div class="usuario">
            <img src="src/view/image/user.png" alt="Imagen de Usuario">
            <span>jjos</span>
        </div>
        <div>
            <a href="cerrar_sesion.php">Cerrar Sesión</a>
        </div>
    </header>
</body>
</html>
