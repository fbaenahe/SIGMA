<?php
session_start();
# Pregunta si no está definida la sesión
// session_unset($SESSION['nombre']);
// session_destroy();
if (!isset($_SESSION['nombre'])) {
    require 'sin.php';
}else {
    require 'con.php';
}  

?>

