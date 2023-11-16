<?php
$servername = "based"; ## Este valor cambia cuando se genera un nombre distinto en el docker-file
$username = "root"; ## Reemplazar por el usuarios asignado en Sigma
$password = "sigma"; ## Reemplazar por la contraseña del suaurio asignado en Sigma
$dbname = "SIGMA";

// Crear una conexión a la base de datos
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>
