<?php
    if ($_GET['frm']=="drp") {
        echo('<h2>Eliminar registro</h2>');
    }else{
        echo('<h2>Editar registro</h2>');
    }
?>
<form action="" method="post">
    <label for="nroregistro">Número de registro<input type="text" id="nroregistro" name="nroregistro" class="texto" required></label>
    
    <input type="submit" value="Buscar" name="buscar" class="send">
</form>