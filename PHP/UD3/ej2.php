<?php

    /**
     * @author Álvaro Pardo Peralta
     * Dada la fecha del sistema, indicar las horas, minutos y segundos junto con el día de la semana
     */
    
    //Indico la zona horaria
    date_default_timezone_set('Europe/Madrid');
    $fecha = date("H:i:s l");

    echo $fecha . "\n";

?>