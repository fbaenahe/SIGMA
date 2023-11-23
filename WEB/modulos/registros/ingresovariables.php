<?php
if($_POST['tipodocumento']){
    $tipodocumento = $_POST['tipodocumento'];
}else{
    $tipodocumento = "";
}

if($_POST['title']){
    $titulo = $_POST['title'];
}else{
    $titulo = "";
}

if($_POST['date']){
    $fecha = $_POST['date'];
}else{
    $fecha = date("Y-m-d");
}

// Obtener información sobre el archivo
$archivo_nombre = $_FILES['archivo']['name'];
$archivo_tipo = $_FILES['archivo']['type'];
$archivo_tamano = $_FILES['archivo']['size'];
$archivo_tmp = $_FILES['archivo']['tmp_name'];
// Directorio de destino para los archivos
$directorio_destino = "files/";
// Crear una ruta única para el archivo
$archivo_ruta = $directorio_destino . $archivo_nombre;
// Mover el archivo al directorio de destino
move_uploaded_file($archivo_tmp, $archivo_ruta);

?>
