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

    

    echo $horasRestantes . "\n";



?>