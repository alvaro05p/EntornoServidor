<?php

    /**
     * @author Álvaro Pardo Peralta
     * Escribe un programa que lea tres números positivos y compruebe si son iguales.
     */

    $nums = readline("Numeros:");

    $separado = explode(" ", $nums);

    $num1 = $separado[0];
    $num2 = $separado[1];
    $num3 = $separado[2];

    if($num1 != $num2 && $num1 != $num3 && $num2 != $num3){

        echo "Los numeros son diferentes" . "\n";

    }else if($num1 == $num2 && $num2 == $num3){

        echo $num1 . " se repite 3 veces" . "\n";

    }else if($num1 == $num2 || $num1 == $num3){

        echo $num1 . " se repite 2 veces" . "\n";

    }else if($num1 == $num2 || $num2 == $num3){

        echo $num2 . " se repite 2 veces" . "\n";

    }

?>