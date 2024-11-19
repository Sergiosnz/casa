<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de las personas</title>
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
        .highlight {
            background-color: #ffcccb;
        }
    </style>
</head>
<body>

    <h1>Datos de las personas</h1>

    <?php
    if (isset($_POST['personas']) && is_array($_POST['personas'])) {
        $personas = $_POST['personas'];

        // Variables para almacenar la persona más alta y más baja
        $personaMasAlta = null;
        $personaMasBaja = null;

        // Recorrer el array de personas para encontrar la más alta y más baja
        foreach ($personas as $index => $persona) {
            if ($personaMasAlta === null || $persona['altura'] > $personaMasAlta['altura']) {
                $personaMasAlta = $persona;
                $personaMasAlta['index'] = $index;
            }
            if ($personaMasBaja === null || $persona['altura'] < $personaMasBaja['altura']) {
                $personaMasBaja = $persona;
                $personaMasBaja['index'] = $index;
            }
        }

        // Mostrar los datos en una tabla
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Altura (cm)</th><th>Email</th></tr>";

        foreach ($personas as $index => $persona) {
            $highlightClass = '';
            if ($index == $personaMasAlta['index']) {
                $highlightClass = 'highlight';
            } elseif ($index == $personaMasBaja['index']) {
                $highlightClass = 'highlight';
            }

            echo "<tr class='$highlightClass'>";
            echo "<td>" . $persona['nombre'] . "</td>";
            echo "<td>" . $persona['altura'] . "</td>";
            echo "<td>" . $persona['email'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";

        // Mostrar información adicional sobre la persona más alta y más baja
        echo "<p><strong>Persona más alta:</strong> " . $personaMasAlta['nombre'] . " (" . $personaMasAlta['altura'] . " cm)</p>";
        echo "<p><strong>Persona más baja:</strong> " . $personaMasBaja['nombre'] . " (" . $personaMasBaja['altura'] . " cm)</p>";
    } else {
        echo "<p>No se recibieron datos de personas.</p>";
    }
    ?>

</body>
</html>
