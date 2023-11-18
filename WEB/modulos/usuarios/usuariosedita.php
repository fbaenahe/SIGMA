<?php
    if(isset($_POST['edUsuario'])){
        $documentousr = $_POST['documento'];
        require 'sentencias/conexion.php';
        require 'sentencias/usuarios/usuariosbuscauno.php';
        if($valida_consulta>0){
            $documento=$trae_datos['documento'];
            $nombre=$trae_datos['nombre'];
            $apellido=$trae_datos['apellido'];
            $usuario=$trae_datos['usuario'];
            $mail=$trae_datos['mail'];
            $habilitado=$trae_datos['habilitado'];
            $perfil=$trae_datos['perfil'];
        };
    }
?>

    <table>
        <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Habilitado</th>
            <th>Perfil</th>
        </tr>
        <tr>
        <form action="" method="post">
            <td><input type="text" id="documento" name="documento" class="dtexto" required
            <?php
                if (isset($documento)){
                    echo('value="'.$documento.'"');
                }
            ?>
            ></td>
            <td><input type="text" id="nombre" name="nombre" class="dtexto" required
            <?php
                if (isset($documento)){
                    echo('value="'.$nombre.'"');
                }
            ?>
            ></td>
            <td><input type="text" id="apellido" name="apellido" class="dtexto"
            <?php
                if (isset($documento)){
                    echo('value="'.$apellido.'"');
                }
            ?>
            ></td>
            <td><input type="text" id="usuario" name="usuario" class="dtexto" required
            <?php
                if (isset($documento)){
                    echo('value="'.$usuario.'"');
                }
            ?>
            ></td>
            <td><input type="text" id="mail" name="mail" class="dtexto"required
            <?php
                if (isset($documento)){
                    echo('value="'.$mail.'"');
                }
            ?>
            ></td>
            <td><input type="checkbox" id="habilitado" name="habilitado" class="dtexto"
            <?php
            $tq=1;
                if (isset($documento)){
                    if ($habilitado==1){
                        echo("checked");
                    }
                }
            ?>
            ></td>
            <td><input type="checkbox" id="perfil" name="perfil" class="dtexto"
            <?php
                if (isset($documento)){
                    if ($perfil==1){
                        echo('checked');
                    }
                }
            ?>
            ></td>
        </tr>
        <tr>
            <th colspan="7"><input type="submit" value="Agregar - Editar" name="edUsuariounic" class="dsend"></th>
        </form>
        </tr>
    </table>