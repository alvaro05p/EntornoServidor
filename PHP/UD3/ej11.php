<?php

    /**
     * @author Álvaro Pardo Peralta
     * Diseña un programa para imprimir los números impares menores que N
     */

    $num = readline("Numero: ");

    for($i = 0; $i <= $num; $i++){
        if($i%2 != 0){
            echo $i . "\n";
        }
    }

?>