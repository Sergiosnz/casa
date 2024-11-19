<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Números Aleatorios</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .max-col {
            color: blue;
        }
        .min-row {
            color: green;
        }
        .default {
            color: black;
        }
    </style>
</head>
<body>

<?php
// Dimensiones del array
$filas = 6;
$columnas = 9;

// Generar números aleatorios únicos entre 100 y 999
$numerosDisponibles = range(100, 999);
shuffle($numerosDisponibles);

// Inicializar el array bidimensional
$array = [];
$contador = 0;

// Rellenar el array con los números aleatorios únicos
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $array[$i][$j] = $numerosDisponibles[$contador++];
    }
}

// Encontrar el número máximo y mínimo, así como sus posiciones
$maximo = $array[0][0];
$minimo = $array[0][0];
$posMaximo = ['fila' => 0, 'columna' => 0];
$posMinimo = ['fila' => 0, 'columna' => 0];

for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        if ($array[$i][$j] > $maximo) {
            $maximo = $array[$i][$j];
            $posMaximo = ['fila' => $i, 'columna' => $j];
        }
        if ($array[$i][$j] < $minimo) {
            $minimo = $array[$i][$j];
            $posMinimo = ['fila' => $i, 'columna' => $j];
        }
    }
}

// Mostrar el array en una tabla HTML
echo "<table>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        $clase = 'default'; // Clase por defecto (negro)
        
        if ($i == $posMinimo['fila']) {
            $clase = 'min-row'; // Fila del mínimo en verde
        }
        if ($j == $posMaximo['columna']) {
            $clase = 'max-col'; // Columna del máximo en azul
        }

        // Si es el mínimo y está en la fila y columna correspondiente
        if ($i == $posMinimo['fila'] && $j == $posMaximo['columna']) {
            $clase = 'max-col min-row'; // Colorear con ambas clases
        }

        echo "<td class='$clase'>" . $array[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
