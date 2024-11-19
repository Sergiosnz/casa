<?php
    $listaNumAlea = [];
    const LIMITE = 50;
    const LIMITE_MIN_RAND = 0;
    const LIMITE_MAX_RAND = 99;

    for($i=0;$i<LIMITE;$i++)
        $listaNumAlea [] = rand(LIMITE_MIN_RAND,LIMITE_MAX_RAND);

    for($j=0;$j<count($listaNumAlea);$j++)
        echo "<ul type=square>
                <li>$listaNumAlea[$j]</li>
            </ul>";
?>