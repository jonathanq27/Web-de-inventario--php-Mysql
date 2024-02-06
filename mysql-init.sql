-- Crea la base de datos y el usuario para la aplicación PHP
CREATE DATABASE IF NOT EXISTS my_database;
CREATE USER IF NOT EXISTS 'my_user'@'%' IDENTIFIED BY 'my_password';
GRANT ALL PRIVILEGES ON my_database.* TO 'my_user'@'%';