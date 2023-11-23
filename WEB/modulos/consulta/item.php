<div class="center">
    <?php
    $registro = $_GET['item'];
    require 'sentencias/conexion.php';
    require 'sentencias/catalogo/consultaitem.php';

    if ($valida_consulta == 0){
        echo("No hay nada que mostrar");
    } else {
        echo(
            '
            <table>
        <tr>
            <td>'.$trae_datos["title"].'</td>
        </tr>
        <tr>
            <td>Imagen Imagen Imagen</td>
        </tr>
        <tr>
            <td>Detalles
                <br>
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