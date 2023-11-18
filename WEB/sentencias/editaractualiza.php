<?php
if($conexion){
    $sentencia = "UPDATE `registrostemp` SET `title` = '$titulo', `date` = '$fecha' WHERE `registrostemp`.`id` = $id;";
    $consulta = mysqli_query($conexion, $sentencia);

}
mysqli_close($conexion);
?>