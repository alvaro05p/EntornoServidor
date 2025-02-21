<?php

    $numeros = [];

    for( $i = 0; $i < 3; $i++ ){
        $numero = readline("Numero: ");
        $numeros[$i] = $numero;
    }

    rsort($numeros);

    for( $i = 0; $i < count($numeros); $i++ ){
        echo $numeros[$i] ."\n";
    }

?>