<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/Style.css" rel="stylesheet" type="text/css"/>
    </head>
    <style>
        body{
            background-image: url( img/iniciosesion.jpg)
        }
    </style>
    <body>
        <h2 id="titulo-blanco">Ingresar al Sistema</h2>
        <form class="formulario" action="index.php" method="POST">
            <div class="contenedor">
            <div class="input-contenedor">
            <input type="number" name="telefono" placeholder="Ingrese su teléfono" required maxlength="9"> 
            </div>
            <div class="input-contenedor">
            <input type="password" name="pass" placeholder="Ingrese su contraseña" required maxlength="20"> 
            </div>
            <input type="submit" value="Iniciar Sesión">
            </div>
        </form> <br>
        <div>
            <a href="index.php">Volver al Inicio</a>
        </div>
    </body>
</html>