<?php

    /**
     * @author Álvaro Pardo Peralta
     * Dado un vector asociativo de trabajadores con su salario creado solicitando al usuario el nombre 
     * y salario de cada trabajador, crea usando funciones el salario máximo, el salario mínimo y el 
     * salario medio
     */

    $numTrabajadores = readline("Cuantos trabajadores? ");

    $trabajadores=[];

    //Creamos un array asociativo en el que el nombre de trabajador actua como una posición 
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