<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Definir el array bidimensional de personas
$personas = [
    ['nombre' => 'Aitor', 'altura' => 182, 'email' => 'aitor@correo.com'],
    ['nombre' => 'Laura', 'altura' => 165, 'email' => 'laura@correo.com'],
    ['nombre' => 'Carlos', 'altura' => 178, 'email' => 'carlos@correo.com'],
    ['nombre' => 'Maria', 'altura' => 170, 'email' => 'maria@correo.com'],
    ['nombre' => 'Pedro', 'altura' => 185, 'email' => 'pedro@correo.com']
];

// Mostrar el array en una tabla HTML
echo "<table>";
echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";

foreach ($personas as $persona) {
    echo "<tr>";
    echo "<td>" . $persona['nombre'] . "</td>";
    echo "<td>" . $persona['altura'] . "</td>";
    echo "<td>" . $persona['email'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
