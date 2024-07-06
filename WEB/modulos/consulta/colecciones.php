<div class="center">

<table class="listcolecciones">
    <tr>
        <th colspan="4" class="tit_lista">
    
    <?php

    $colec = $_GET['col'];

    switch ($colec) {
        case 'img':
            $coleccion = "Imagen";
            break;
        case 'vid':
            $coleccion = "Video";
            break;
        case 'snd':
            $coleccion = "Audio";
            break;
        default:
            # code...
            break;
    }

    echo("Listado de " . $coleccion );

    require 'sentencias/conexion.php';
    // require 'sentencias/catalogo/consultacolecion.php';
    require 'sentencias/catalogo/consultacoleccionpaginas.php';
    ?>

        </th>
    </tr>

        <tr>
            <th class="table_id" style="width:5%">#</th>
            <th class="table_id" style="width:5%">Id</th>
            <th class="table_doc" style="width:20%">Documento</th>
            <th class="table_det">Detalles</th>
        </tr>
        
        <?php

        if ($valida_consulta == 0) {
            echo("<tr><td colspan='4'>No hay datos para mostrar </td></tr>");
        } else {
            $i = 1;
            while ($trae_datos = mysqli_fetch_array($resultado_paginado)) {
            // while ($trae_datos = mysqli_fetch_array($consulta)) {
                $registro = $trae_datos["id"];
                $titulo = $trae_datos["title"];
                $icono = $trae_datos['files_path'];

            $resul = (($pagina_actual * $resultados_por_pagina)-$resultados_por_pagina);

            echo('
                <tr>
                <td rowspan="2">'.$i + $resul.'</td>
                <td rowspan="2">'.$registro.'</td>'.
                // <td rowspan="2"><a href="?item='.$registro.'">'.$registro.'</a></td>
                '<td rowspan="2"><a href="?item='.$registro.'">');
                if(empty($icono)){
                    echo('<img src="img/missing_icon.png" alt="thumb" width="80px"></a>');
                } elseif($coleccion == "Imagen") {
                    echo('<img src="' . $icono . '" alt="thumb" width="80px"></a>');
                } elseif($coleccion == "Audio") {
                    echo('<img src="img/Audio.png" alt="icono" width="80px"></a>');
                } elseif($coleccion == "Video") {
                    echo('<img src="img/Video.png" alt="icono" width="80px"></a>');
                } 
            echo('
                </td>
                <td>Título: <a href="?item='.$registro.'">'.$titulo.'</a></td>
                </tr><tr>
                <td>Fecha: '.$trae_datos["date"].'</td>
                </tr>
            ');
            $i++;
            }
        }
        ?>
    </table>
</div>

<?php
require 'sentencias/conexion.php';
require 'sentencias/catalogo/consultacoleccionpaginas.php';
echo("<br>Páginas: ");
// Mostrar enlaces de paginación
for ($i = 1; $i <= $total_paginas; $i++) {
    echo ("<a href='?col=$colec&pagina=$i'>$i</a> ");
}
?>