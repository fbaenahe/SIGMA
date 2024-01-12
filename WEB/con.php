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
<!-- <div class="locations">
<?php
  // $onfire=1;
  // include 'modulos/locations.php';
?>
</div> -->
<div class="side">
<?php
# Saludo
echo("<p>Hola, <b>".$_SESSION['nombre']."</b></p>");
# Pregunte si es un usuario habilitado (y activo)
if ($_SESSION['habilitado'] == 0){
# Usuario sin permisos - No habilitado
  echo("<p class='no_access'>Usted no cuenta con permisos suficientes para trabajar en este módulo.<br>");
  echo("Comuníquese con el administrador</p>");
  session_destroy();
  echo("<ul><li>");
  echo('<a href="bye.php">Salir</a>');
  echo("</li></ul>");
}else{
# Usuario habilitado
?>
<ul>
  <li><b>Registros</b></li>
  <ul>
    <li><a href="?frm=new">Ingresar</a></li>
    <li><a href="?frm=edt">Editar</a></li>
    <li><a href="?frm=drp">Eliminar</a></li>
  </ul>
  <li><b>Usuarios</b></li>
  <ul>
    <li><a href="?frm=usrs">Usuarios</a></li>
  </ul>
  <li><b>Desconetar</b></li>
  <li><a href="bye.php">Logout</a></li>
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
} elseif(isset($_GET['col'])){
  #  if($_GET['col']=="img"){
      include 'modulos/consulta/colecciones.php';
  #  }
} elseif (isset($_GET['item'])){
      include 'modulos/consulta/item.php';
  } elseif (isset($_POST['buscador'])){
    include 'modulos/consulta/query.php';
  }
  
else{
  include 'modulos/consulta/centro.php';
}

?>
</div>

<?php
  include 'modulos/pie.php';
?>
