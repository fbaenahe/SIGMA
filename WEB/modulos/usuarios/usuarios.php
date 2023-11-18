<?php
if (isset($_POST['edUsuariounic'])) {
    // echo('Viene con datos');
    
    require 'sentencias/conexion.php';
    require 'sentencias/usuarios/usuarioscrea.php';
}
?>

<div class="center">
    <h2>Usuarios</h2>
    <hr>

    <?php
    require 'usuariosedita.php';
    ?>

    <hr>
    
    <table>
        <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Habilitado</th>
            <th>Perfil</th>
            <th>Acción</th>
        </tr>

        <?php
            # Ejecuto sentencias
            require 'sentencias/conexion.php';
            require 'sentencias/usuarios/usuariosbuscatodos.php';
            if($valida_consulta>0){
                while ($fila = mysqli_fetch_assoc($resultado_paginado)) {
                    $documento = $fila['documento'];
                    echo ('<tr> <form action="" method="post">
                        <td>' . $documento . '<input type="hidden" name="documento" value='.$documento.'></td>
                        <td>' . $fila['nombre'] . '</td>
                        <td>' . $fila['apellido'] . '</td>
                        <td>' . $fila['usuario'] . '</td>
                        <td>' . $fila['mail'] . '</td>
                        <td>' . $fila['habilitado'] . '</td>
                        <td>' . $fila['perfil'] . '</td>
                        <td> <input type="submit" value="Editar" name="edUsuario" class="send"></form> </td>
                    </tr>');
                }
            }
    ?>
    </table>

<?php
echo("Páginas: ");
// Mostrar enlaces de paginación
for ($i = 1; $i <= $total_paginas; $i++) {
    echo ("<a href='?frm=usrs&pagina=$i'>$i</a> ");
}

?>

</div>