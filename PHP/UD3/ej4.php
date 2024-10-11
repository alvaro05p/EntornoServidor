<?php

    /**
     * @author Álvaro Pardo Peralta
     * Elabora un programa para determinar si una hora leída en la forma horas, minutos y segundos 
     * está correctamente expresada.
     */
    $hora = readline("Introducir hora hh:mm:ss => ");

    $partes = explode(":", $hora);

    

    if($partes[0] < 24 && $partes[1] < 60 && $partes[2] < 60){
        echo "Formato correcto";
    }else{
        echo "Formato incorrecto";
    }

?>