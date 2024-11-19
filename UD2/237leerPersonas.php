<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para ingresar personas</title>
</head>
<body>

    <h1>Ingresar detalles de las personas</h1>

    <?php
    // Verificar si se recibió la cantidad de personas
    if (isset($_POST['cantidad'])) {
        $cantidad = (int)$_POST['cantidad']; // Convertir a entero

        if ($cantidad > 0) {
            echo "<form action='237procesarPersonas.php' method='POST'>";

            // Generar los campos para cada persona
            for ($i = 1; $i <= $cantidad; $i++) {
                echo "<h3>Persona $i:</h3>";
                echo "<label for='nombre$i'>Nombre:</label>";
                echo "<input type='text' id='nombre$i' name='personas[$i][nombre]' required><br><br>";
                
                echo "<label for='altura$i'>Altura (cm):</label>";
                echo "<input type='number' id='altura$i' name='personas[$i][altura]' min='1' required><br><br>";

                echo "<label for='email$i'>Email:</label>";
                echo "<input type='email' id='email$i' name='personas[$i][email]' required><br><br>";
            }

            // Botón para enviar los datos
            echo "<input type='submit' value='Enviar personas'>";
            echo "</form>";
        } else {
            echo "<p>Por favor, ingrese una cantidad válida.</p>";
        }
    } else {
        echo "<p>No se recibió la cantidad de personas.</p>";
    }
    ?>

</body>
</html>

