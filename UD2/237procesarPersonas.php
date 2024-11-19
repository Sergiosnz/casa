<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de las personas</title>
</head>
<body>

    <h1>Datos de las personas ingresadas</h1>

    <?php
    if (isset($_POST['personas']) && is_array($_POST['personas'])) {
        $personas = $_POST['personas'];

        echo "<table border='1'>";
        echo "<tr><th>Nombre</th><th>Altura (cm)</th><th>Email</th></tr>";

        foreach ($personas as $persona) {
            echo "<tr>";
            echo "<td>" . $persona['nombre'] . "</td>";
            echo "<td>" . $persona['altura'] . "</td>";
            echo "<td>" . $persona['email'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No se recibieron datos de personas.</p>";
    }
    ?>

</body>
</html>
