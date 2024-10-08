<?php

    $num = rand(1, 20);

    echo "Numero : " . $num . "\n";

    $sumatorio = $num;

    for($i = $num; $i>0; $i--){
        
        $anterior = $sumatorio;
        $sumatorio += $i;
        echo $anterior . " + " . $i . " = " . $sumatorio . "\n";

    }

    

?>