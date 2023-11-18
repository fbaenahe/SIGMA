<div class="center">
<?php
if (isset($_POST['grabar'])) {
    # Llamo los datos
    require 'ingresovariables.php';
    # Ejecuto sentencias
    require 'sentencias/conexion.php';
    require 'sentencias/grabar.php';
    echo("Se agregó el registro número: ".$id_insertado);
    echo('<br>"'.$titulo.'"');
}else{
    require 'ingresoformulario.php';
}
?>

</div>