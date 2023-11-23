<br><br>
<table class="tabla">
    <!-- <tr>
        <td colspan="3">
            <form action="" method="post">
                <input type="text" name="buscador" id="buscador" placeholder="Busque por palabra clave">
                <input type="submit" value="Buscar">
            </form>
        </td>
    </tr> -->
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td><a href="?col=img"><img src="https://st3.depositphotos.com/1017819/15265/i/450/depositphotos_152650618-stock-photo-masai-mara-sunset.jpg" alt="" width="250px"></a></td>
        <td><a href="?col=vid"><img src="https://images.ctfassets.net/00i767ygo3tc/18ViOpst6sfsZKmWIMbFr1/8f3b20a1746d686f59e170b6d9383f77/how-to-make-a-video-go-viral.png?w=900&fm=webp" alt="" width="250px"></a></td>
        <td><a href="?col=snd"><img src="https://img.freepik.com/vector-premium/ecualizador-audio-estilo-linea-efecto-tono-musica_533410-1814.jpg?w=1800" alt="" width="250px"></a></td>
    </tr>

    <?php
    require 'sentencias/conexion.php';
    require 'sentencias/catalogo/consultacatalogo.php';
    ?>

    <tr>
        <td>[<?php echo($imagen); ?>]</td>
        <td>[<?php echo($video); ?>]</td>
        <td>[<?php echo($audio); ?>]</td>
    </tr>
</table>