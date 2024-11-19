<?php
    declare(strict_types=1);
    function mayor(): int{
        $mayor = 0;
        if(count(func_get_args())==0){
            return 0;
        }else{
            $mayor = func_get_arg(0);
            foreach(func_get_args() as $arg){
                if($mayor < $arg)
                   $mayor = $arg;
            }//fin foreach
            return $mayor;
        }//fin else
       
    }//fin function mayor

    function concatenar(...$palabras) : string{
        $frase = "";
        foreach($palabras as $palabra)
            $frase .= $palabra . " ";
        return $frase;
    }

    echo concatenar("En","un lugar","de La Mancha", "...");
?>