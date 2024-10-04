<?php

    #Se puede hacer de varias formas: 

    #$dia = date("d");
    #$dia = readline("Dia del mes: ");
    $dia = rand(1,31);

    if($dia < 15){
        echo "Primera quincena";
    }else if($dia >= 15){
        echo "Segunda quincena";
    }

?>