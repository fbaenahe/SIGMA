<?php
if($conexion){
    $sentencia = "UPDATE `registrostemp` SET `tipodocumento` = '$tipodocumento', `title` = '$titulo', 
    `date` = '$fecha', `place` = '$place', `author` = '$author', `author_role` = '$author_role',
    `id_keywords` = '$id_keywords', `description` = '$description', `description_alternative` = '$description_alternative',
    `documentalista` = '$documentalista', `date_documentalista` = '$date_documentalista'
    WHERE `registrostemp`.`id` = $id;";
    $consulta = mysqli_query($conexion, $sentencia);

}
mysqli_close($conexion);
?>