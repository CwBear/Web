<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h2>Ingresar al Sistema</h2>
        <form id="login" action="index.php" method="POST">
            <input type="number" name="telefono" placeholder="Ingrese su teléfono" required maxlength="9"> <br> <br>
            <input type="password" name="pass" placeholder="Ingrese su contraseña" required maxlength="20"> <br> <br>
            <input type="submit" value="Iniciar Sesión">
        </form> <br>
        <div>
            <a href="index.php">Volver al Inicio</a>
        </div>
    </body>
</html>