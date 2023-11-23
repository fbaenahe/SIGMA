<div class="center">
    
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

    echo("<h2>Colección << " . $coleccion . " >> </h2>");

    require 'sentencias/conexion.php';
    require 'sentencias/catalogo/consultacolecion.php';
    ?>

    <table>
        <tr>
            <th>Nro</th>
            <!-- <th>Id</th> -->
            <th>Previsualización</th>
            <th>Detalles</th>
        </tr>
        
        <?php

        if ($valida_consulta == 0) {
            echo("<tr><td colspan='4'>No hay datos para mostrar </td></tr>");
        } else {
            $i = 1;
            while ($trae_datos = mysqli_fetch_array($consulta)) {
                $registro = $trae_datos["id"];
                $titulo = $trae_datos["title"];
            echo('
                <tr>
                <td rowspan="2">'.$i.'</td>'.
                // <td rowspan="2"><a href="?item='.$registro.'">'.$registro.'</a></td>
                '<td rowspan="2"><a href="?item='.$registro.'">thumb</a></td>
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