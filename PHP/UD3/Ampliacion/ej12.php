<?php

    /**
     * @author Álvaro Pardo Peralta
     * Crear un programa para introducir números por teclado mientras su suma no alcance o iguale a 
     * 1000. Cuando ésto ocurra, debes mostrar los números introducidos, cuántos son, el total de la 
     * suma y la media de todos ellos
     */

    $nNums = 0;
    $num = 0;
    $nums = [];

    while($num <= 1000){
        $numActual = readline("Num: ");
        $nNums++;
        $num += $numActual;
        $nums[]=$numActual;
        echo $num . "\n";
    }

    $media = $num/count($nums);

    print_r($nums) . "\n";
    echo "Son $nNums números \n";
    echo "Suma: $num \n";
    echo "Media: $media \n";
?>