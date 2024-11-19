<?php
declare(strict_types=1);
$cantidad = $_GET['cantidad'];

for($i = 1; $i<=$cantidad;$i++){
    echo $i . ": " . '<input type="text" name="num[]" pattern="{0-9}">' . '<br><br>';
}

if(isset($_GET['num'])){
    $nums = $_GET['num'];
    $total = array_sum($nums);
    echo 'Total: ' . $total;
}
?>
