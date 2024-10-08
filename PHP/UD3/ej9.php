<?php

    $num = rand(1, 15);

    echo "Numero : " . $num . "\n";

    $factorial = $num;

    for($i = $num; $i>0; $i--){
        
        $anterior = $factorial;
        $factorial += $i;
        echo $anterior . " * " . $i . " = " . $factorial . "\n";
    }

?>