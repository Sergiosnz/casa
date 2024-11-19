<?php

//Array asociativo se usa igual que un array normal solo que se define por claves
// y valores asociados a esas claves, se les puede asignar un nombre o 
// se declaran automaticamente como $key $valor y el nombre del array: 
$dinero = [ 500=>0,200=>0,100=>0,50=>0,20=>0,10=>0,5=>0,2=>0,1=>0,];
foreach($dinero as $key => $value){
    while($dinero>=$key){
        $dinero[$value]++;
        $dinero-=$key;}
    }

    // Definir el array bidimensional de personas cada uno con su asociacion 
$personas = [
    ['nombre' => 'Aitor', 'altura' => 182, 'email' => 'aitor@correo.com'],
    ['nombre' => 'Laura', 'altura' => 165, 'email' => 'laura@correo.com'],
    ['nombre' => 'Carlos', 'altura' => 178, 'email' => 'carlos@correo.com'],
    ['nombre' => 'Maria', 'altura' => 170, 'email' => 'maria@correo.com'],
    ['nombre' => 'Pedro', 'altura' => 185, 'email' => 'pedro@correo.com']
];
foreach ($personas as $persona) {
    echo "<td>" . $persona['nombre'] . "</td>";
    echo "<td>" . $persona['altura'] . "</td>";
    echo "<td>" . $persona['email'] . "</td>";
}

//definir un array asociativo en el que inpeccionara si existe la clave dentro del array
$frase="Me llamo Sergio";
    $vocales=["a"=> 0,"e"=> 0,"i"=> 0,"o"=> 0,"u"=> 0];
    $frase2=strtolower($frase);
    
    for($i=0;$i<strlen($frase2);$i++){
        if(array_key_exists($frase2[$i],$vocales)){
            $vocales[$frase2[$i]]++;
        }
    }

//contar numero de palabras 
$palabras = explode(' ', $frase);
echo count($palabras) . "<br>";

//contar PALABRAS CON SU TAMAÑO
for($i=0;$i<count($palabras);$i++){
    echo $palabras[$i] ." => ". strlen($palabras[$i]) . "<br>";
}

//Dar la vuelta a una frase o una cadena
$alreves=strrev($frase3);

//Genera un numero aleatorio el cual con la tabla ASCII puedes generar cualquier caracter 
random_int(min,max)

//frase a poner en primer lugar
declare(strict_types=1);

//aqui para invocar metodos de un objeto no se usa . si no ->
$emp1->getNombreCompleto();
echo $emp1->debePagarImpuestos()?"Debe pagar impuesto":"No debe pagar impuestos";

//Metodos GET 
public function getNom(): string{
    return $this->nombre;
}

//Metodos SET
public function setNombre(string $nombre){
    $this->nombre = $nombre;
}

//Herencia
declare(strict_types=1);
    include_once '307Persona.php';
    class Empleado extends Persona{}

//Para llamar a una constante en vez de usar this-> se usa self::

?>