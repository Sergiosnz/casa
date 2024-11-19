<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<form action sumarDatos.php method="post">';
    for($i=1;$i<=$cantidad;$i++){
        echo "<label for='numero$i'>Numero $i </label>";
        echo "<input type='number' name='numeros[]' id='numero' required><br>";
    }
    echo '<input type="submit" value="Enviar">'
    echo "</form>";
    ?>
</body>
</html>
