<?php

include_once 'Modelo/Cliente.php';

class CCliente {
    private $clientes = [];

    public function getClientes(){
        return $this->clientes;
    }
    
    public function agregarCliente(Cliente $cliente) {
        array_push($this->clientes, $cliente);
    }
}

if(!(isset($_SESSION["instanciaCCliente"]))){
    $ccliente = new CCliente();
    $admin = new Cliente(963015102, "admin", "admin");
    $ccliente->agregarCliente($admin);
    $_SESSION["clientes"] = serialize($ccliente);
    $_SESSION["instanciaCCliente"] = "si";
}


if(isset($_POST["telefonoNuevo"])){

    $idUnico = true;
    foreach (unserialize($_SESSION["clientes"])->getClientes() as $value){
        if($value->getTelefono() == $_POST["telefonoNuevo"]){
            $idUnico = false;
            break;
        }
    }
    if($idUnico){

        if($_POST["passNuevo"] === $_POST["passNConfirm"]){
            $telefonoNuevo = $_POST["telefonoNuevo"];
            $nombreNuevo = $_POST["nombreNuevo"];
            $passNueva = $_POST["passNuevo"];
            $clienteNuevo = new Cliente($telefonoNuevo, $nombreNuevo, $passNueva);
            $cclienteT = unserialize($_SESSION["clientes"]);
            $cclienteT->agregarCliente($clienteNuevo);
            $_SESSION["clientes"] = serialize($cclienteT);
        }
    }
}


if(isset($_POST["telefono"])){
    foreach (unserialize($_SESSION["clientes"])->getClientes() as $value) {
        if($value->getTelefono() == $_POST["telefono"] && $value->getPass() == $_POST["pass"]){
            $_SESSION["user"] = serialize($value);
            break;
        }
    }
}

