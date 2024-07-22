<?php
$servername = "localhost";  // Nombre del servidor MySQL
$username = "root";         // Nombre de usuario de MySQL
$password = "";             // Contraseña de MySQL (en XAMPP por defecto es vacía)
$database = "cine";  // Nombre de la base de datos

// Crear conexión
$conex = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conex->connect_error) {
    die("Conexión fallida: " . $conex->connect_error);
}
?>

