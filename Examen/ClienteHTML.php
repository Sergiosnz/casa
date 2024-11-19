<?php

declare(strict_types=1);

class Cliente{
    private string $nombre;
    private string $apellidos;
    private int $saldo;
    private $direcciones=[];
    private static $saldoMinimo=100;

    function __construct($nombre,$apellidos,$saldo=500,){
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->saldo=$saldo;
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
        return $cantidad>=self::$saldoMinimo && $this->saldo-$cantidad;
    }

    public function agregarDireccion(string $direccion){
        $this->direcciones[]=$direccion;
    }

    public function listarDirecciones(){
        return implode(",",$this->direcciones);
    }

    public function eliminarDirecciones(){
        $this->direcciones=[];
    }

    public static function setSaldoMinimo($nuevoSaldoMinimo){
        self::$saldoMinimo=$nuevoSaldoMinimo;
    }

    public static function getSaldoMinimo(){
        return self::$saldoMinimo;
    }

    public static function toHTML(Cliente $cliente):string{
        $html="<p>Nombre: </p>". $cliente->getNombreCompleto() ."<p> Saldo: </p>". $cliente->getSaldo." €";
        if(!empty($cliente->direcciones)){
            $html .= "<p>Direcciones</p>";
            $html .= "<ol>";
            foreach($cliente->direcciones as $direccion){
                $html .= "<li>". $direccion. "</li>";
            }
            $html .="</ol>";
        }
        return $html;
    }

}
$cliente1=new Cliente("Luis","Lopez");
echo $cliente1->getNombreCompleto()."<br>";
echo $cliente1->getSaldo()."<br>";
echo $cliente1->puedeRetirarFondos(50);
echo $cliente1->agregarDireccion("una direccion")."<br>";
echo $cliente1->listarDirecciones()."<br>";
echo $cliente1->eliminarDirecciones()."<br>";
echo $cliente1->listarDirecciones()."<br>";


?>