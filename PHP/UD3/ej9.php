<?php

    /**
     * @author Álvaro Pardo Peralta
     * Genera un número entre 1 y 15 y calcula su factorial. Nota: El factorial de un número es la 
     * multiplicación de él mismo con sus anteriores. Ejemplo 3!=3*2*1=6 
     */

    $num = rand(1, 15);

    echo "Numero : " . $num . "\n";

    //El primer numero al iterar será el introducido
    $factorial = $num;

    for($i = $num; $i>0; $i--){
        
        $anterior = $factorial;
        //Multiplicamos el resultado por el anterior
        $factorial *= $i;
        echo $anterior . " * " . $i . " = " . $factorial . "\n";
    }

?>