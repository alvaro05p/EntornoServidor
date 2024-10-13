<?php

    /**
     * @author Álvaro Pardo Peralta
     * Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del 
     * día de la semana.
     */

    $num = readline("Número de dia de la semana: ");

    //Un switch que mostrará diferentes resultados segun el numero dado
    switch ($num) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "Inserte un número del 1 al 7";
            break;

    }

    echo "\n";

?>