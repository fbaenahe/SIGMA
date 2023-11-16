<?php
if($conexion)
    {
        $logueo = "SELECT * FROM autenticacion WHERE usuario='$usuario' and contrasena='$contrasena'";
        $consulta = mysqli_query($conexion, $logueo);
        $valida_par = mysqli_num_rows($consulta);
        $trae_par = mysqli_fetch_array($consulta);
        }
?>