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
            background-image: url( img/registro.jpg)
        }
    </style>
    <body>
        <h2 id="titulo-blanco">Registrar Usuario Nuevo</h2>
        <form class = "formulario"  action="index.php" method="POST">
            <div class="contenedor">
            <div class="input-contenedor">
            <label id="text-registro">Ingrese su número de teléfono:</label>
            <input type="number" name="telefonoNuevo" required maxlength="9">
            </div>
            <div class="input-contenedor">
            <label>Ingrese el nombre del usuario:</label>
            <input type="text" name="nombreNuevo" required maxlength="20">
            </div>
            <div class="input-contenedor">    
            <label>Ingrese la contraseña:</label>
            <input type="password" name="passNuevo" required maxlength="20"> 
            </div>
            <div class="input-contenedor">    
            <label>Ingrese de nuevo la contraseña:</label>
            <input type="password" name="passNConfirm" required maxlength="20"> 
            </div >
            <input type="submit" value="Registrarme">
            </div>    
        </form> <br>
        <div id="btnVolverRegistrarUsuario">
            <a href="index.php">Volver al Inicio</a>
        </div>
    </body>
</html>