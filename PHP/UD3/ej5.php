<?php
    $tiempo = readline("Minutos de llamada:");

    if($tiempo < 3){
        echo "Coste: 10cent" . "\n";
    }else{
        $coste = (($tiempo - 2) * 5) + 10;
        echo "Coste: " . $coste . "cent" . "\n";
    }
?>