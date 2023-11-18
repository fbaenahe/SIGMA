<?php
if($conexion){
    $sentencia = "INSERT INTO `registrostemp` (`id`, `title`, `date`) VALUES (NULL, '$titulo','$fecha');";
    $consulta = mysqli_query($conexion, $sentencia);

    if ($consulta) {
        // Obtener el ID del último registro insertado
        $id_insertado = mysqli_insert_id($conexion);
    }
}
mysqli_close($conexion);
?>