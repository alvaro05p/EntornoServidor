<?php

    /**
     * @author Álvaro Pardo Peralta
     * Diseña un programa que determine la cantidad total a pagar por una llamada telefónica de 
     * acuerdo a las siguientes premisas: Toda llamada que dure menos de 3 minutos tiene un coste de 
     * 10 céntimos. Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 
     * céntimos
     */

    $tiempo = readline("Minutos de llamada:");

    if($tiempo < 3){
        echo "Coste: 10cent" . "\n";
    }else{
        //Con esta operación muliplicamos por 5 los minutos que van despues de los dos primeros
        $coste = (($tiempo - 2) * 5) + 10;
        echo "Coste: " . $coste . "cent" . "\n";
    }
?>