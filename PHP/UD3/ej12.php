<?php

    $nAlumnos = readline("Numero de alumnos: ");

    $notas = [];

    for($i = 1; $i <= $nAlumnos; $i++){
        array_push($notas,readline("Nota alumno " . $i . ": "));
    }

    $total = 0;

    for($i = 0; $i < count($notas); $i++){

        $total+=$notas[$i];
    
    }

    $media = $total/$nAlumnos;

    echo "Media = " . $media . "\n";

    $alumnosMasMedia = 0;

    for($i = 0; $i < $nAlumnos; $i++){
        if($notas[$i] > $media){
            $alumnosMasMedia++;
        }
    }

    echo $alumnosMasMedia . " por encima de la media." . "\n";
?>