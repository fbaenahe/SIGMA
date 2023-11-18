<?php
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
