    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Encabezado con Imagen de Usuario</title>
        <?php require '../routes/configroutes.php' ?>
        <link rel="stylesheet" href="<?php echo Rutacss?>header.css">
    </head>
    <body>
        <header>
            <div class="logo">
            <img src="<?php echo Rutaimagenes?>logo.png" alt="Imagen Adicional" class="imagen-adicional">
            </div>

            <div class="usuario">
                <img src="<?php echo Rutaimagenes?>useric.png" alt="Imagen de Usuario">
                <span>usuario</span>
                <a href="cerrar_sesion.php">Cerrar Sesión</a>
            </div>
        </header>
    </body>
    </html>
