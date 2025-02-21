<?php

    /**
     * @author Álvaro Pardo Peralta
     * Realiza un programa que pida 8 números enteros, los almacene en un vector junto con la 
     * palabra “par” o “impar” según proceda y los muestre. Además debe indicar la cantidad de 
     * números en cada caso y el porcentaje de pares e impares
     */

    $numeros = [];
    $pares = 0;
    $impares = 0;

    for($i=1;$i<=8;$i++){
        $num = readline("Numero " . $i . ": ");
        $esPar = false;
        if($num % 2 == 0){
            $esPar = true;
        }

        if($esPar){
            array_push($numeros, $num . ", par");
            $pares++;
        }else{
            array_push($numeros, $num . ", impar");
            $impares++;
        }

    }

    var_dump($numeros);

    $porcentajePar = ($pares * 100) / 8;
    $porcentajeImpar = ($impares * 100) / 8;

    echo "Pares: " . $pares . " ($porcentajePar%) \n";
    echo "Impares: " . $impares . " ($porcentajeImpar%) \n"; 
?>