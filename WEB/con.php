<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['nombre'])){
header("location: index.php");
}

#echo('sí hay sesion activa');
#echo('<a href="bye.php">bye</a>');
?>

<?php
include 'modulos/cabezote.php';
?>
<div class="encabezado">
    <?php
    include 'modulos/encabezado.php';
    ?>
</div>
<div class="locations">
<?php
  $onfire=1;
  include 'modulos/locations.php';
?>
</div>
<div>
<?php
# Saludo
echo("<p>Hola, <b>".$_SESSION['nombre']."</b></p>");
# Pregunte si es un usuario habilitado (y activo)
if ($_SESSION['habilitado'] == 0){
# Usuario sin permisos - No habilitado
  echo("Usted no tiene permisos suficientes<br>");
  echo("Comuníquese con el administrador");
  session_destroy();
  echo("<br>");
  echo('<a href="bye.php">bye</a>');
}else{
# Usuario habilitado
?>
<ul>
  <li>Registros</li>
  <ul>
    <li><a href="?frm=new">Ingresar</a></li>
    <li><a href="?frm=edt">Editar</a></li>
    <li><a href="?frm=drp">Eliminar</a></li>
  </ul>
  <li>Usuarios</li>
  <ul>
    <li><a href="?frm=usrs">Usuarios</a></li>
  </ul>
  <li><a href="bye.php">bye</a></li>
</ul>
<?php
}
?>
</div>

<div class="medio">
<?php
if(isset($_GET['frm'])){
  if($_GET['frm']=="new"){
    include 'modulos/registros/ingreso.php';
    # include 'modulos/registros/ingreso22.php';
  }elseif ($_GET['frm']=="edt") {
    include 'modulos/registros/editar.php';
  }elseif ($_GET['frm']=="drp") {
    // include 'modulos/registros/eliminar.php';
    include 'modulos/registros/editar.php';
  }elseif ($_GET['frm']=="usrs") {
    include 'modulos/usuarios/usuarios.php';
  }
}
?>
</div>

<?php
  include 'modulos/pie.php';
?>
