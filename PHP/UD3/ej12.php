<?php

    /**
     * @author Álvaro Pardo Peralta
     * Crea un programa para leer las notas de los alumnos de una clase, y que informe del número de 
     * alumnos cuya nota sea mayor de la media de la clase
     */

    $nAlumnos = readline("Numero de alumnos: ");

    $notas = [];

    for($i = 1; $i <= $nAlumnos; $i++){
        array_push($notas,readline("Nota alumno " . $i . ": "));
    }

    $total = 0;

    for($i = 0; $i < count($notas); $i++){

        //Almacenamos el total para luego porder hacer la media
        $total+=$notas[$i];
    
    }

    $media = $total/$nAlumnos;

    echo "Media = " . $media . "\n";

    //Iremos incrementando este valor por cada alumno que tenga mas nota que la media
    $alumnosMasMedia = 0;

    for($i = 0; $i < $nAlumnos; $i++){
        if($notas[$i] > $media){
            $alumnosMasMedia++;
        }
    }

    echo $alumnosMasMedia . " por encima de la media." . "\n";
?>