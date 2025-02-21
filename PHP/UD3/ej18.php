<?php

    /**
     * @author Álvaro Pardo Peralta
     * Escribe un programa que diga cuál es la cifra que está en el centro (o las dos del centro si el 
     * número de cifras es par) de un número entero introducido por teclado
     */

    $num = readline("Numero: ");

    for($i = 0; $i < strlen($num); $i++){

        //Sacamos un redondeo de la mitad de la longitud para saber cual es el numero del centro
        if($i == round(strlen($num)/2)){
            if(strlen($num)%2 != 0){
                //Si es impar mostramos solo un número
                echo $num[$i-1] . "\n";

            }else if(strlen($num)%2 == 0){
                //Si es par mostramos el numero y el siguiente
                echo $num[$i-1] . $num[$i] ."\n";

            }
        }
    }

?>