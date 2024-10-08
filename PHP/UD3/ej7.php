<?php

    date_default_timezone_set('Europe/Madrid');

    $hora = date("G");

    $minuto = date("i");

    $segundo = date("s");

    $horaIntroducida = readline("Introduce la hora hh:mm:ss => ");

    $separado = explode(":", $horaIntroducida);

    if($hora < $separado[0]){

        $horasRestantes =  $separado[0] - $hora;
        

    }else{

        $horasRestantes = ($separado[0] - $hora) + 24;
    
    }

    if($minuto < $separado[1]){

        $minutosRestantes = $separado[1] - $minuto;

    }else{

        $paraEnPunto = 60 - $minuto;
        $minutosRestantes = $separado[1] + $paraEnPunto;
        $horasRestantes++;

    }

    if($segundo < $separado[2]){

        $segundosRestantes = $separado[2] - $segundo;

    }else{

        $paraEnPunto = 60 - $segundo;
        $segundosRestantes = $separado[2] + $paraEnPunto;
        $minutosRestantes++;

    }

    echo $horasRestantes . ":" . $minutosRestantes . ":" . $segundosRestantes . "\n";

?>