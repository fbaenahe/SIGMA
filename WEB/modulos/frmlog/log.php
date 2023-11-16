<div class=centro>
<table class="logueo">
    <tr>
        <td><h2>SIGMA</h2></td>
    </tr>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <tr>
        <td><input type="text" name="usuario" id="username" placeholder="Usuario" required class="texto"></td>        
    </tr>
    <tr>
        <td><input type="password" name="contrasena" id="password" placeholder="Contrasena" required class="texto"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Acceder"  id="log_in"></td>
    </tr>
    </form>
</table>
</div>
