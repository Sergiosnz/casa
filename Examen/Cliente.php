<?php

declare(strict_types=1);

class Cliente{
    

    function __construct(
        private string $nombre,
        private string $apellidos,
        private int $saldo,){}


    public function setNombre(string $nombre){
        $this->nombre=$nombre;
    }

    public function setApellidos(string $apellidos){
        $this->apellidos=$apellidos;
    }
    
    public function setSaldo(int $saldo){
        $this->saldo=$saldo;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function getApellidos():string{
        return $this->apellidos;
    }

    public function getSaldo():int{
        return $this->saldo;
    }

    public function getNombreCompleto(){
        return $this->nombre ." ". $this->apellidos;
    }

    public function puedeRetirarFondos(float $cantidad):bool{
        return $this->saldo>=$cantidad;
    }

}
$cliente1=new Cliente("Luis","Lopez",2000);
echo $cliente1->getNombreCompleto()."<br>";
echo $cliente1->puedeRetirarFondos(200);


?>