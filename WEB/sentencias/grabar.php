<?php
if($conexion){
    $sentencia = "INSERT INTO `registrostemp` (`id`, `tipodocumento`, `title`, `date`, `files_path`,
    `place`, `author`, `author_role`, `id_keywords`, `description`,`description_alternative`, `documentalista`, 
    `date_documentalista`) 
        VALUES (NULL,'$tipodocumento','$titulo','$fecha','$archivo_ruta','$place','$author','$author_role',
        '$id_keywords','$description','$description_alternative','$documentalista','$date_documentalista');";
    $consulta = mysqli_query($conexion, $sentencia);

    if ($consulta) {
        // Obtener el ID del último registro insertado
        $id_insertado = mysqli_insert_id($conexion);
    }
}
mysqli_close($conexion);
?>