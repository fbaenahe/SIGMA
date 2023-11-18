<?php
$documento=$_POST['documento'];

$nombre=$_POST['nombre'];

if (isset($_POST['apellido'])) {
    $apellido=$_POST['apellido'];;
}else{
    $apellido="";
}

$usuario=$_POST['usuario'];

$mail=$_POST['mail'];

if (isset($_POST['habilitado'])) {
    $habilitado=1;
}else{
    $habilitado=0;
}

if (isset($_POST['perfil'])) {
    $perfil=1;
}else{
    $perfil=0;
}


if($conexion){
    $sentencia = "SELECT * FROM autenticacion WHERE documento='$documento'";
    $consulta = mysqli_query($conexion, $sentencia);
    
    # Valida si la consulta tiene coincidencias 
    $valida_consulta = mysqli_num_rows($consulta);

    if ($valida_consulta>0) {
        # hay que editar
        $sentencia = "UPDATE `autenticacion` SET `documento` = '$documento', `nombre` = '$nombre',
            `apellido` = '$apellido', `usuario` = '$usuario', `mail` = '$mail', `habilitado` = '$habilitado',
            `perfil` = '$perfil' WHERE `autenticacion`.`documento` = $documento;";
        $consulta = mysqli_query($conexion, $sentencia);
    }else {
        # hay que registrar nuevo
        $sentencia = "INSERT INTO `autenticacion` (`id`, `documento`, `nombre`, `apellido`, `usuario`, 
            `mail`, `habilitado`, `perfil`) VALUES (NULL, '$documento', '$nombre', '$apellido', '$usuario', 
            '$mail', '$habilitado', '$perfil');";
        $consulta = mysqli_query($conexion, $sentencia);
    }
}
mysqli_close($conexion);
?>