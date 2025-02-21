<?php

    /**
     * @author Alvaro Pardo
     * Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y 
     * cuántos son negativos (muestra los números, la cantidad de positivos y negativos y el porcentaje 
     * de cada grupo.
     */

    $nums = [];
    $positivos=0;
    $negativos=0;

    for($i = 1; $i <= 10; $i++){
        $num = readline("Numero " . $i . ": ");
        //arra_push para añadir el segundo valor al array especificado en el primer valor
        array_push($nums, $num);

        if($num > 0){

            $positivos++;

        }else if ($num < 0){

            $negativos++;

        }
        
    }

    var_dump($nums) . "\n";

    echo "Positivos: " . $positivos . " (" . $positivos * 10 . "%)" . "\n";

    echo "Negativos: " . $negativos . " (" . $negativos * 10 . "%)" . "\n";

?>