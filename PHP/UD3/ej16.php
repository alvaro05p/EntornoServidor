<?php

    /**
     * @author Álvaro Pardo Peralta
     * Realiza un programa que resuelva una ecuación de primer grado (del tipo 2(ax - b)=0
     */

    echo "Es una ecuación de tipo : \"2(ax - b)=0\"\n";
    $a = readline("A: \n");
    $b = readline("B: \n");
    
    $resultado = $b / $a;

    echo "En 2($a" . "x - $b)=0 la x equivale a $resultado \n";

?>