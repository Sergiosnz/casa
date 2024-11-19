<?php
declare(strict_types=1);
$cantidad = $_GET['cantidad'];


echo "<form method='GET' action='sumarDatos.php'>";

for($i = 1; $i<=$cantidad;$i++){
        echo $i . ": " . '<input type="text" name="num[]" pattern="{0-9}">' . '<br><br>';
    }
echo '<input type="submit" value="Enviar">';
echo '</form>';
?>