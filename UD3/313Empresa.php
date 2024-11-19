<?php
    declare(strict_types=1);
    include_once("312Trabajador.php");

    class Empresa{

        function __construct(
            private string $nombre,
            private string $direccion,
            private $arrTrabajadores = [],
        ){}//fin __construct

    public function getNom(): string{
        return $this->nombre;
    }//fin getNom()
    public function getDireccion(): string{
        return $this->direccion;
    }//fin getDireccion
    public function getTrabajadores(): array{
        return $this->arrTrabajadores;
    }//fin getTrabajadores

    public function anyadirTrabajador(Trabajador $t){
        $this->getTrabajadores()[] =$t;
    }//fin anyadirTrabajador

    public function listarTrabajadoresHtml() : string   {
        $listado = "";
        foreach($this->arrTrabajadores as $t)
            $listado .= Trabajador::toHtml($t);

        return $listado;
    }//listarTrabajadoresHtml

    public function getCosteNominas(): float{

        $totalNominas = 0;

        foreach($this->arrTrabajadores as $t)
            $totalNominas += $t->calcularSueldo();   
        return $totalNominas;

    }

    }//clase
?>