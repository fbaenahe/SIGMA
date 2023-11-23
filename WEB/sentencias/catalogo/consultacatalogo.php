<?php
if($conexion){
    $sentencia = "SELECT tipodocumento, COUNT(*) as cantidad FROM registrostemp GROUP BY tipodocumento;";
    $consulta = mysqli_query($conexion, $sentencia);
    
    # Valida si la consulta tiene coincidencias 
    $valida_consulta = mysqli_num_rows($consulta);

    while($trae_datos = mysqli_fetch_assoc($consulta)) {
        if ($trae_datos["tipodocumento"]=="Audio"){
            $audio = $trae_datos["cantidad"];
        } elseif ($trae_datos["tipodocumento"]=="Imagen") {
            $imagen = $trae_datos["cantidad"];
        } elseif ($trae_datos["tipodocumento"]=="Video") {
            $video = $trae_datos["cantidad"];
        }
    }
}
mysqli_close($conexion);
?>