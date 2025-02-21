<?php

    function generar(){
        return rand(1, 100);
    }

    $numero = [];
    $cuadrado = [];
    $cubo = [];

    for($i=0; $i<20; $i++){
        $num = generar();
        $cuadrados = pow($num, 2);
        $cubos = pow($num, 3);
        array_push($numero, $num);
        array_push($cuadrado, $cuadrados);
        array_push($cubo, $cubos);
    }

    for($i=0; $i<20; $i++){
        //%-10d alinea los números añadiendo 10 espacios
        printf("%-5d %-5d %-5d\n", $numero[$i], $cuadrado[$i], $cubo[$i]);
    }

?>