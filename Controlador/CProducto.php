<?php
 
include_once 'Modelo/Producto.php';

class CProducto {
    private $catalogo = [];
    private $carrito = [];
    
    public function getCatalogo() {
        return $this->catalogo;
    }
    
    public function getCarrito() {
        return $this->carrito;
    }
    
    public function agregarAlCatalogo(Producto $producto) {
        array_push($this->catalogo, $producto);
    }
    
    public function agregarAlCarrito(Producto $producto) {
        array_push($this->carrito, $producto);
    }
}
 
if(!(isset($_SESSION["CProducto"]))){
    $cproducto = new CProducto();
    $productoNuevo = new Producto(1, "Producto 1", 1000, 10);
    $cproducto->agregarAlCatalogo($productoNuevo);
    $_SESSION["catalogo"] = serialize($cproducto);
    $_SESSION["CProducto"] = "si";
}

if(isset($_POST["idN"])){

    $idPNuevo = $_POST["idN"];
    $nombrePNuevo = $_POST["nombreN"];
    $precioPNuevo = $_POST["precioN"];
    $cantidadPNuevo = $_POST["cantidadN"];
    $productoNuevo = new Producto($idPNuevo, $nombrePNuevo, $precioPNuevo, $cantidadPNuevo);
    $cproductoT = unserialize($_SESSION["catalogo"]);
    $cproductoT->agregarAlCatalogo($productoNuevo);
    $_SESSION["catalogo"] = serialize($cproductoT);
}

if(isset($_POST["idCarrito"])){
    foreach (unserialize($_SESSION["catalogo"])->getCatalogo() as $prod){
        if($prod->getId() == $_POST["idCarrito"]){
            $cproductoT = unserialize($_SESSION["catalogo"]);
            $cproductoT->agregarAlCarrito($prod);
            $_SESSION["catalogo"] = serialize($cproductoT);
            break;
        }
    }
}