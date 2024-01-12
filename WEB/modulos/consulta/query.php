<?php
$qr = $_POST['buscador'];

    require 'sentencias/conexion.php';
    require 'sentencias/catalogo/queryitems.php';


?>

    

<div class="center">

<table class="listcolecciones">
    <tr>
        <th colspan="4" class="listcolecciones"> Consulta </th>
    </tr>
    <tr>
        <th class="table_id">Id</th>
        <th class="table_id">Tipo</th>
        <th class="table_id">Documento</th>
        <th class="table_det">Detalles</th>
        </tr>
        
        <?php

        if ($valida_consulta == 0) {
            echo("<tr><td colspan='4'>No hay datos para mostrar </td></tr>");
        } else {
            $i = 1;
            while ($trae_datos = mysqli_fetch_array($consulta)) {
                $registro = $trae_datos["id"];
                $tipo = $trae_datos["tipodocumento"];
                $titulo = $trae_datos["title"];
                $icono = $trae_datos['files_path'];


            echo('
                <tr>
                <td rowspan="2">'.$i.'</td>
                <td rowspan="2">'.$tipo.
                // <td rowspan="2"><a href="?item='.$registro.'">'.$registro.'</a></td>
                '<td rowspan="2"><a href="?item='.$registro.'">');
                if(empty($icono)){
                    echo('<img src="img/missing_icon.png" alt="thumb" width="80px"></a>');
                } elseif($tipo == "Imagen") {
                    echo('<img src="' . $icono . '" alt="thumb" width="80px"></a>');
                } elseif($tipo == "Audio") {
                    echo('<img src="img/Audio.png" alt="icono" width="80px"></a>');
                } elseif($tipo == "Video") {
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
// require 'sentencias/conexion.php';
// require 'sentencias/catalogo/consultacoleccionpaginas.php';
// echo("<br>Páginas: ");
// // Mostrar enlaces de paginación
// for ($i = 1; $i <= $total_paginas; $i++) {
//     echo ("<a href='?col=$colec&pagina=$i'>$i</a> ");
// }

?>