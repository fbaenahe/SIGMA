<?php
if($_POST['id']){
    $id = $_POST['id'];
}else{
    $id = "";
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
?>
