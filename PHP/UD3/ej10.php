<?php

    /**
     * @author Álvaro Pardo Peralta
     * Genera un número entre 1 y 20 y calcula su sumatorio. Nota: El sumatorio de un número es la 
     * suma de él mismo con sus anteriores. Ejemplo ∑3=3+2+1=6
     */

    $num = rand(1, 20);

    echo "Numero : " . $num . "\n";

    $sumatorio = $num;

    for($i = $num; $i>0; $i--){
        
        $anterior = $sumatorio;
        //Similar al ejercicio anterior pero sumando
        $sumatorio += $i;
        echo $anterior . " + " . $i . " = " . $sumatorio . "\n";

    }

    

?>