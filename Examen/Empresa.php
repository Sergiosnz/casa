<?php

    declare(strict_types=1);
    require_once("PersonaEdad.php");
    
    class Empresa{
       private string $nombre;
       private string $ubicacion;
       private $clientes=[];
       
       public function __construct($nombre,$ubicacion){
        $this->nombre=$nombre;
        $this->ubicacion=$ubicacion;
       }

       public function getNombre():string{
        return $this->nombre;
       }

       public function getUbicacion():string{
        return $this->ubicacion;
       }

       public function agregarCliente(Cliente $cliente){
        $this->clientes[]=$cliente;
       }

       public function listarClientesHtml(){}

       public function calcularTotalSaldo(){
        $totalSaldo=0;
        foreach($this->clientes as $cliente){
            $totalSaldo+=$cliente->getSaldo()
        }
        return $totalSaldo;
       }
    }

?>