<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h2>Registrar Producto Nuevo</h2>
        <form id="formRegistrarProducto" action="index.php" method="POST">
            <label>Ingrese el número de identificación:</label>
            <input type="number" name="idN" required maxlength="9"> <br> <br>
            <label>Ingrese el nombre:</label>
            <input type="text" name="nombreN" required maxlength="30"> <br> <br>
            <label>Ingrese el precio:</label>
            <input type="number" name="precioN" required maxlength="7"> <br> <br>
            <label>Ingrese la cantidad disponible:</label>
            <input type="number" name="cantidadN" required maxlength="4"> <br> <br>
            <label>Ingrese caratula del video juego:</label>
            <input type="file" name="fotoN" multiple> <br> <br>
            <input type="submit" value="Registrar producto"> 
            
        </form> <br>
        <div>
            <a href="index.php">Volver al Inicio</a>
        </div>
    </body>
</html>