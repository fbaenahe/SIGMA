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


if($_POST['place']){
    $place = $_POST['place'];
}else{
    $place = "";
}

if($_POST['author']){
    $author = $_POST['author'];
}else{
    $author = "";
}

if($_POST['author_role']){
    $author_role = $_POST['author_role'];
}else{
    $author_role = "";
}

if($_POST['id_keywords']){
    $id_keywords = $_POST['id_keywords'];
}else{
    $id_keywords = "";
}

if($_POST['description']){
    $description = $_POST['description'];
}else{
    $description = "";
}

if($_POST['description_alternative']){
    $description_alternative = $_POST['description_alternative'];
}else{
    $description_alternative = "";
}

if($_POST['documentalista']){
    $documentalista = $_POST['documentalista'];
}else{
    $documentalista = "";
}

if($_POST['date_documentalista']){
    $date_documentalista = $_POST['date_documentalista'];
}else{
    $date_documentalista = "";
}
?>
