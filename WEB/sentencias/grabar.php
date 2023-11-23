<?php
if($conexion){
    $sentencia = "INSERT INTO `registrostemp` (`id`, `tipodocumento`, `title`, `date`, `files_path`) VALUES (NULL,'$tipodocumento','$titulo','$fecha','$archivo_ruta');";
    $consulta = mysqli_query($conexion, $sentencia);

    if ($consulta) {
        // Obtener el ID del último registro insertado
        $id_insertado = mysqli_insert_id($conexion);
    }
}
mysqli_close($conexion);
?>