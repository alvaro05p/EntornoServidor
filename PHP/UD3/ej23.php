<?php

    $numTrabajadores = readline("Cuantos trabajadores? ");

    $trabajadores=[];

    for($i=0;$i<$numTrabajadores;$i++){
        $nombre = readline("Nombre: ");
        $trabajadores[$nombre] = readline("Salario: ");
    }

    var_dump($trabajadores);

    $salarioMaximo = maximo($trabajadores);
    $salarioMinimo = minimo($trabajadores);
    $salarioMedio = medio($trabajadores);


    function maximo($array){
        return max($array);
    }

    function minimo($array){
        return min($array);
    }

    function medio($array){
        return array_sum($array)/count($array);
    }

    echo "Salario mínimo: " . $salarioMinimo . "\n";
    echo "Salario máximo: " . $salarioMaximo . "\n";
    echo "Salario medio: " . $salarioMedio . "\n";


?>