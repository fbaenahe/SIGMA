<?php
    if ($_GET['frm']=="edt") {
        echo('<h2>Editar registro</h2>');
    }elseif ($_GET['frm']=="drp"){
        echo('<h2>Eliminar registro</h2>');
        echo('<h3>Atención!!!</h3>');
        echo('<p>Está a punto de ejecutar una acción peligrosa. Una vez eliminados los datos la acción no se puede reversar.</p>');
        echo('<p>Para continuar debe escribir la palabra "confirmo" en el campo vacío al final del formulario.</p>');
    }else{
        echo('<h2>Nuevo registro</h2>');
    }
?>
<form action="" method="post">
<ul>
    <!-- Si viene con dato de id para editar -->
    <?php
        if (isset($id)) {
            echo('<input type="hidden" name="id" value="'.$id.'">');
        }
    ?>
    <li>
        <label for="title">Nombre del documento<input type="text" id="title" name="title" class="texto" 
        <?php
        // Valida si es una consulta para llenar dato
        if (isset($tt)) {
            echo("value=$tt");
        }
        ?>
        ></label>
    </li>
    
    <li>
        <label for="date">Fecha de publicación<input type="date" id="date" name="date" class="texto"
        <?php
        // Valida si es una consulta para llenar dato
        if (isset($dt)) {
            echo("value=$dt");
        }
        ?>
        ></label>
    </li>
    <?php
    if ($_GET['frm']=="drp") {
        echo('<li> <input type="text" name="confirmar" id="confirmar" placeholder="Escriba: confirmo" required> </li>');
    }
    ?>
    
    <input type="submit"
    <?php
    if ($_GET['frm']=="edt") {
        echo('value="Actualizar" name="actualizar"');
    }elseif ($_GET['frm']=="drp"){
        echo('value="Eliminar" name="eliminar"');
    }else{
        echo('value="Grabar" name="grabar"');
    }
    ?>
    class="send">
</ul>
</form>
