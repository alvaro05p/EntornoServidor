<?php

    /**
     * @author Álvaro Pardo Peralta
     * Leer por teclado y rellenar dos vectores de 10 números enteros y mezclarlos en un tercer vector 
     * de la forma: el 1º de A, el 1º de B, el 2º de A, el 2º de B, etc.
     */

    $V1=[];
    $V2=[];
    $mezcla=[];

    //Rellenar vector 1
    for($i=0;$i<10;$i++){
        $V1[$i] = readline("Vector 1: ");
    }

    //Rellenar vector 2
    for($i=0;$i<10;$i++){
        $V2[$i] = readline("Vector 2: ");
    }

    //Mezclar los arrays
    for($i=0;$i<10;$i++){
        array_push($mezcla, $V1[$i]);
        array_push($mezcla, $V2[$i]);
    }


    var_dump($mezcla)
?>