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
            <th colspan=3>'.$trae_datos["title"].'</th>
        </tr>
        <tr>
            <td class="archivo"  colspan=3>');
            
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
        <tr>
            <th colspan=3><b>Detalles</b></th>
        </tr>
        <tr>
            <td>Descripción:</td>
            <td colspan=2>'.$trae_datos["description"].'</td>
        </tr>
        <tr>
            <th style="width:34%">
                Descriptivos
            </th>
            <th style="width:33%">
                Estructura
            </th>
            <th style="width:33%">
                Administrativo
            </th>
        </tr>
        <tr>
            <td>
                Autor: '.$trae_datos["author"].'<br>
                Rol: '.$trae_datos["author_role"].'<br>
                Palabras clave: '.$trae_datos["id_keywords"].'<br>
                Fecha de publicación: '.$trae_datos["date"].'<br>
            </td>
            <td>
                Registro número: '.$trae_datos["id"].'<br>
            </td>
            <td>
                Documentalista: '.$trae_datos["documentalista"].'<br>
                Fecha de documentación: '.$trae_datos["date_documentalista"].'<br>
            </td>
        </tr>
        <tr>
            <td>Observaciones:</td>
            <td colspan=2>'.$trae_datos["description_alternative"].'</td>
        </tr>
    </table>
            '
        );
    }
    ?>
</div>