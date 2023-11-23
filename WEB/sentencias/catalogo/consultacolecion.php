<?php
if($conexion){
    $sentencia = "SELECT * FROM registrostemp WHERE tipodocumento='$coleccion';"; 
    $consulta = mysqli_query($conexion, $sentencia);
    
    # Valida si la consulta tiene coincidencias 
    $valida_consulta = mysqli_num_rows($consulta);

}
mysqli_close($conexion);
?>