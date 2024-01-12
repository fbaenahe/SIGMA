<div class="center">
    <?php
    $registro = $_GET['item'];
    require 'sentencias/conexion.php';
    require 'sentencias/catalogo/consultaitem.php';

    $tipo = $trae_datos["tipodocumento"];
    $archivo = $trae_datos['files_path'];

    if ($valida_consulta == 0){
        echo("No hay nada que mostrar");
    } else {
        echo(
            '
            <table class="item">
        <tr>
            <th>'.$trae_datos["title"].'</th>
        </tr>
        <tr>
            <td class="archivo">');
            
            if ($tipo == "Video"){
                // type="video/mp4">
                echo('<video width="640" height="360" controls>
                <source src="'.$archivo.'" type="video/mp4"> Tu navegador no soporta el elemento de video. </video>');
            } elseif ($tipo == "Audio"){
                // type="video/mp4">
                echo('<audio controls>
                <source src="'.$archivo.'" type="video/mp4"> Tu navegador no soporta el elemento de audio. </audio>');
            } else {
                echo('<img src="' . $archivo . '" alt="Archivo" width="500px">');
            }
        echo('</td>
        </tr>
        <tr>
            <th><b>Detalles</b></th>
        </tr>
        <tr>
            <td>
                Registro número: '.$trae_datos["id"].'<br>
                Fecha: '.$trae_datos["date"].'
            </td>
        </tr>
    </table>
            '
        );
    }
    ?>
</div>