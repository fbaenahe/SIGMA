<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:: SIGMA ::..</title>
    <link rel="stylesheet" href="css/logstyle.css">
</head>
<body>


<div class=centro>
<table class="logueo">
    <tr>
        <td><h1>Ingreso</h1></td>
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

</body>
</html>