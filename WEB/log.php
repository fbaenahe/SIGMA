<?php
session_start();
# Pregunta si no está definida la sesión
// session_unset($SESSION['nombre']);
// session_destroy();
if (!isset($_SESSION['nombre'])) {
    # Si no tiene configurada la variable sesión
    # Pregunte si al cargar o recargar la página no están definidas las variables
    if (!isset($_POST['usuario']) or !isset($_POST['contrasena'])) {
        # Si no están definidas o no tienen información
        # Presenta el formulario para el logueo"
        # echo('no estan configurados usr pass');
        require 'modulos/frmlog/log.php';
    }else{
        if ($_POST['usuario']=="" or $_POST['contrasena']==""){
            # Si alguna variable está vacía "
            # Presenta el formulario para el logueo"
            echo ('<p class="msg_error">Por favor registre información de usuario y contraseña</p>');
            require 'modulos/frmlog/log.php';
        }else {
            # Si las variables tienen información
            # Cargue a las variables los datos que mandó por POST 
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena']; ##### $contrasena = md5($_POST['contrasena']);
            # Se conecta a la BD
            require 'sentencias/conexion.php';
            # Trae los datos de logueo
            require 'sentencias/logueo.php';
            # Pregunta si encontró coincidencia para el logueo
            if ($valida_par>0) {
                # Sí usuario y contraseña son válidos
                # Cargue las variables de Sesión: nombre, habilitado y admin; con los datos de la BD
                $_SESSION['nombre'] = $trae_par['nombre'];
                $_SESSION['habilitado'] = $trae_par['habilitado'];
                $_SESSION['perfil'] = $trae_par['perfil'];
                # Cargua la página del menú para la página 
                #require 'con.php';
                header("location: con.php");
            }else {
                # Si no se encontró coincidencia en el logueo
                echo('<p class="msg_error">Lo lamento, no hay coincidencia con los datos suministrados</p>');
                require 'modulos/frmlog/log.php';
            }
        }
    }
}else{
    header("location: con.php");
}

?>
