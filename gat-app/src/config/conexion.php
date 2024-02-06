<?php
// Incluir archivo de configuración global
require_once './conexion.php';

// Intentar establecer la conexión PDO
try {
    $dsn = "mysql:host={$db_config['servername']};port={$db_config['port']};dbname={$db_config['dbname']}";
    $conn = new PDO($dsn, $db_config['username'], $db_config['password']);
    // Establecer el modo de error para excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
