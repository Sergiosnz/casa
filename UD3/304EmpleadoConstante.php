<?php

declare(strict_types=1);
class Empleado{
    
    private $arrTelefonos;
    const SUELDO_TOPE = 3333;

    public function __construct(
        private string $nombre, 
        private string $apellidos,
        private float $sueldo = 1000){
        
        $this->arrTelefonos = array();
    }

    public function getNom(): string{
        return $this->nombre;
    }
    public function getApellidos(): string{
        return $this->apellidos;
    }
    public function getSueldo(): float{
        return $this->sueldo;
    }
    
    public function setSueldo(float $sueldo){
        $this->sueldo = $sueldo;
    }

    public function getNombreCompleto(): string{
        return $this->nombre . " " . $this->apellidos;
    }

    public function debePagarImpuestos() : bool{
        return $this->sueldo > self::SUELDO_TOPE;
    }

    public function anyadirTelefono(int $telefono):void{
        $this->arrTelefonos[] = $telefono;
    }

    public function listarTelefonos() : string{
        return implode(", ", $this->arrTelefonos);
    }

    public function vaciarTelefonos() : void{
        $arrTelefonos = [];
    }
}

$emp1 = new Empleado("Peppa", "Pig", 4444);
$emp1->getNombreCompleto();
$emp1->anyadirTelefono(666555777);
$emp1->anyadirTelefono(666888999);
$emp1->anyadirTelefono(666444111);
echo "Listado de teléfonos: <br>";
echo $emp1->listarTelefonos();
$emp1->vaciarTelefonos();
echo "<br>Listado de teléfonos después de vaciar: <br>";
$emp1->listarTelefonos();

//echo $emp1->debePagarImpuestos()?"Debe pagar impuesto":"No debe pagar impuestos";

?>