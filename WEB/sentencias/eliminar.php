<?php
if($conexion){
    $sentencia = "DELETE FROM registrostemp WHERE `registrostemp`.`id` = '$id'";
    $consulta = mysqli_query($conexion, $sentencia);
    
    # Valida si la consulta tiene coincidencias 
#    $valida_consulta = mysqli_num_rows($consulta);

    # Carga los datos a un array
 #   $trae_datos = mysqli_fetch_array($consulta);

}
mysqli_close($conexion);
?>

