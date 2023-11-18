<div class="center">
<?php
if (isset($_POST['buscar'])) {
    # Llamo los datos
    #require 'ingresovariables.php';
    $id = $_POST['nroregistro'];

    # Ejecuto sentencias
    require 'sentencias/conexion.php';
    require 'sentencias/editarbusca.php';

    # Si hay valores en la cosnulta
    if ($valida_consulta > 0) {
        # Llama los datos de la consulta
        require 'editarvariables.php';
        # Carga datos en formulario
        require 'ingresoformulario.php';
    }
    # Si no hay valores para mostrar se devuelve al cuadro de búsqueda
    else{
        echo("Registro no existe");
        require 'editarformulario.php';
    }
}

elseif (isset($_POST['actualizar'])){
    # Llama los datos de la consulta
    require 'editaractualizarvariables.php';

    # Ejecuto sentencias
    require 'sentencias/conexion.php';
    require 'sentencias/editaractualiza.php';

    echo("Se editó el registro número: ".$id." : [ ". $titulo." ]");
}

elseif (isset($_POST['eliminar'])){

    if ($_POST['confirmar'] == "confirmo") {
        $id = $_POST['id'];
        
        # Ejecuto sentencias
        require 'sentencias/conexion.php';
        require 'sentencias/eliminar.php';

        echo("Se eliminó el registro!".$id);
    }else{
        require 'editarformulario.php';
    }
}

else{
    require 'editarformulario.php';
}
?>
</div>