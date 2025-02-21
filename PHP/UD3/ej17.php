<?php

    /**
     * @author Álvaro Pardo Peralta
     * Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 3
     */

    $num = readline("Numero: ");

    if($num % 2 == 0 && $num % 3 == 0){
        echo "El numero es multiplo de 2 y de 3" . "\n";
    }else if($num % 2 == 0){
        echo "El numero es multiplo de 2" . "\n";
    }else if($num % 3 == 0){
        echo "El numero es multiplo de 3" . "\n";
    }

?>