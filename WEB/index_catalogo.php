<?php
    include 'modulos/cabezote.php';
?>
<div class="encabezado">
<?php
## Ojo con el enlace de la imagen
    include 'modulos/encabezado.php';
?>
</div>
<div class="locations">
<?php
    include 'modulos/locations.php';
?>
</div>
<div>

<?php
if(isset($_GET['col'])){
#  if($_GET['col']=="img"){
    include 'modulos/consulta/colecciones.php';
#  }
} elseif (isset($_GET['item'])){
    include 'modulos/consulta/item.php';
} else {
    include 'modulos/consulta/centro.php';
}
?>

</div>
<?php
    include 'modulos/pie.php';
?>