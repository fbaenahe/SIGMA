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
<table class="formulario_ingreso">
    <form action="" method="post" enctype="multipart/form-data">
    <?php
        if (isset($id)) {
        echo('<input type="hidden" name="id" value="'.$id.'">');
        }
    ?>
    <tr>
        <td>Tipo del documento</td>
        <td>
            <select name="tipodocumento" id="tipodocumento" class="texto">
            <?php
            // Valida si es una consulta para llenar dato
            if (isset($td)) {
                echo('<option value="'.$td.'">'.$td.'</option>');
                require 'tipodocumentos/tipodocumentos.php';
            }else{
                require 'tipodocumentos/tipodocumentos.php';
            }
            ?>
        </select>
    </td>
    </tr>

    <tr>
        <td>Nombre del documento</td>
        <td>
            <input type="text" id="title" name="title" class="texto" 
            <?php
                // echo("value='".$tt."'");
            if (isset($tt)) {
                // echo("value=$tt");
                echo("value='".$tt."'");
            }
            ?>
            >
        </td>
    </tr>

    <tr>
        <td>Fecha de publicación</td>
        <td>
            <label for="date"><input type="date" id="date" name="date" class="texto"
            <?php
            // Valida si es una consulta para llenar dato
            if (isset($dt)) {
                echo("value=$dt");
            }
            ?>
            >
        </td>
    </tr>


    <?php
    if ($_GET['frm']=="new") {
        echo('<tr>
                <td> Ítem </td>
                <td> <input type="file" name="archivo" id="archivo" required> </td>
                </tr>');
    }
    ?>

    <?php
    if ($_GET['frm']=="drp") {
        echo('<tr> 
                <td colspan=2> <input type="text" name="confirmar" id="confirmar" placeholder="Confirme la acción" required> </td>
                </tr>');
    }
    ?>


    <tr>
        <td>
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
        </td>
        <td><input type="reset" value="Limpiar" class="cancel"></td>
    </tr>
</form>
</table>