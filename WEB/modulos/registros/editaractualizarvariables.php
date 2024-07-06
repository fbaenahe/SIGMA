<?php
if($_POST['id']){
    $id = $_POST['id'];
}else{
    $id = "";
}

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
    $date_documentalista = date("Y-m-d");;
}
?>
