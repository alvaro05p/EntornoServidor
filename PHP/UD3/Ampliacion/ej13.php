<?php

    /**
     * @author Álvaro Pardo Peralta
     * Diseñar la función operaMatriz, a la que se le pasa dos matrices de enteros positivos mayores de 
     * 0 y la operación que se desea realizar: sumar, restar, multiplicar o dividir (mediante un carácter: 
     * 's', 'r', 'm', 'd'). La función debe imprimir las matrices originales, indicar la operación a realizar y 
     * la matriz con los resultados
     */

    $matriz1 = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];

    $matriz2 = [
        [7,8,9],
        [1,2,3],
        [4,5,6]
    ];

    function operaMatriz($matriz1, $matriz2){

        $tipo = readline("Calculo: (s,r,m,d): ");
        $resuelta = [];

        //Creo un switch para que según la letra haga una operación diferente
        switch($tipo){
            case "s":
                for($i=0;$i<count($matriz1);$i++){
                    for($x=0;$x<count($matriz2);$x++){
                        //Despues de recorrer las otras matrices realizamos el cálculo y lo guardamos en una nueva
                        $resuelta[$i][$x] = $matriz1[$i][$x] + $matriz2[$i][$x];
                    }
                }
                break;
            case "r":
                for($i=0;$i<count($matriz1);$i++){
                    for($x=0;$x<count($matriz2);$x++){
                        $resuelta[$i][$x] = $matriz1[$i][$x] - $matriz2[$i][$x];
                    }
                }
                break;
            case "m":
                for($i=0;$i<count($matriz1);$i++){
                    for($x=0;$x<count($matriz2);$x++){
                        $resuelta[$i][$x] = $matriz1[$i][$x] * $matriz2[$i][$x];
                    }
                }
                break;
            case "d":
                for($i=0;$i<count($matriz1);$i++){
                    for($x=0;$x<count($matriz2);$x++){
                        $resuelta[$i][$x] = $matriz1[$i][$x] / $matriz2[$i][$x];
                    }
                }
                break;
        }

        return $resuelta;
    }

    print_r(operaMatriz($matriz1,$matriz2));

?>