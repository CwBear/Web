<?php
session_start();
include_once 'Modelo/Venta.php';
include_once 'Modelo/Cliente.php';
include_once 'Controlador/CProducto.php';
?>
<html>
    <head>
        <meta charset="UTF-8">

    </head>    
    <body> <?php
if(isset($_SESSION["user"])){
    $total = 0;
    foreach(unserialize($_SESSION["catalogo"])->getCarrito() as $item){
        $total = $total + $item->getPrecio();
        $fecha = date("jnY");
        $idProducto = $item->getId();
        $idCliente = unserialize($_SESSION["user"])->getTelefono();
        $venta = new Venta($fecha, $idProducto, $idCliente); ?>
        <div>
            <div>
                <label> <?php echo ("ID del producto: ".$item->getId()); ?> </label>
            </div>
            <div>
                <label> <?php echo ($item->getNombre()); ?> </label>
            </div>
            <img src="img/1.jpeg" alt="" width=200" height="270"/>
            <div>
                <label> <?php echo ("Cantidad disponible: ".$item->getCantidad()); ?> </label>
            </div>
            <div>
                <label> <?php echo ("Precio: $".$item->getPrecio()); ?> </label>
            </div>
        </div> <?php 
        
    } ?>
    <div>
        <label> <?php echo ("Total: $".$total); ?> </label>
    </div>
        <div>
        <a href="index.php">Volver</a>
    </div> <?php 
}else{ ?>
    <div>
        <label>Inicie sesión para poder comprar.</label>
    </div>
    <div>
        <a href="index.php" >Volver</a>
    </div>
<?php } ?>
    </body>
</html>