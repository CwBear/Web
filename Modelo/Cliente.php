<?php
 
class Cliente {
    private int $telefono;
    private string $nombre;
    private string $pass;
    
    public function __construct(int $telefono, string $nombre, string $pass) {
        $this->setTelefono($telefono);
        $this->setNombre($nombre);
        $this->setPass($pass);
    }
    
    public function getTelefono(){
        return $this->telefono;
    }
    
    public function setTelefono(int $telefono){
        $this->telefono = $telefono;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
    
    public function getPass(){
        return $this->pass;
    }
    
    public function setPass(string $pass){
        $this->pass = $pass;
    }
}
