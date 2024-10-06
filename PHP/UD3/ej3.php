<?php

    $entradaSegundos = readline("Hora en segundos: ");

    if($entradaSegundos <= 86400){

        $h = round($entradaSegundos/3600, 0, PHP_ROUND_HALF_DOWN);

        echo "Horas: " . $h . ", ";

        $minutosRestantes = $entradaSegundos%3600;

        $m = round($minutosRestantes/60, 0, PHP_ROUND_HALF_DOWN);;

        $segundosRestantes = $minutosRestantes%60;

        echo "Minutos: " . $m . ", ";

        echo "Segundos: " . $segundosRestantes . "\n";

    }else{
        echo "Un dia puede tener como maximo 86400 segundos";
    }

?>