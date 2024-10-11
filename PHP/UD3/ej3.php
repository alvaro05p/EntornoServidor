<?php

    /**
     * @author Álvaro Pardo Peralta
     * Crea un programa que reciba una hora expresada en segundos transcurridos desde las 12 de la 
     * noche y la convierta en horas, minutos y segundos
     */

    $entradaSegundos = readline("Hora en segundos: ");


    //86400 son el equivalente a 24h
    if($entradaSegundos <= 86400){

        //Sacamos el numero de horas sin comas
        $h = round($entradaSegundos/3600, 0, PHP_ROUND_HALF_DOWN);

        echo "Horas: " . $h . ", ";

        //Guardamos el restante de minutos de las horas
        $minutosRestantes = $entradaSegundos%3600;

        //Repetimos el proceso anterior con minutos y segundos
        $m = round($minutosRestantes/60, 0, PHP_ROUND_HALF_DOWN);;

        $segundosRestantes = $minutosRestantes%60;

        echo "Minutos: " . $m . ", ";

        echo "Segundos: " . $segundosRestantes . "\n";

    }else{
        echo "Un dia puede tener como maximo 86400 segundos";
    }

?>