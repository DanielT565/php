<?php
$servername = "localhost:3307"; // Nombre del servidor MySQL (generalmente "localhost")
$username = "root"; // Nombre de usuario de MySQL
$password = ""; // Contraseña de MySQL
$dbname = "pruebredes"; // Nombre de la base de datoss
// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Aquí puedes realizar operaciones con la base de datos

// Cerrar la conexión

?>
