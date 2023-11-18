<?php
if($conexion){
    $sentencia = "SELECT * FROM autenticacion";
    $consulta = mysqli_query($conexion, $sentencia);
    
    # Valida si la consulta tiene coincidencias 
    $valida_consulta = mysqli_num_rows($consulta);

    $resultados_por_pagina = 10;
    $total_paginas = ceil($valida_consulta / $resultados_por_pagina);

    // Obtener el número de página actual
    if (!isset($_GET['pagina'])) {
        $pagina_actual = 1;
    } else {
    $pagina_actual = $_GET['pagina'];
    }

    $inicio = ($pagina_actual - 1) * $resultados_por_pagina;

    // Consulta para obtener los registros de la página actual
    $sql_paginado = "SELECT * FROM autenticacion LIMIT $inicio, $resultados_por_pagina";
    $resultado_paginado = mysqli_query($conexion, $sql_paginado);

}
mysqli_close($conexion);
?>