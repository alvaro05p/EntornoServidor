<?php

    $cabecera = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];
    $horas=["14:00", "15:00", "16:00", "17:00", "18:00"];
    $asignaturas=["Mates", "Lengua", "Medi", "Historia", "Giologia"];

    //Esto deja un mínimo de 5 espacios
    printf("|-----------------------------------------------------------------------|\n");
    printf("|%-10s |%-10s |%-10s |%-10s |%-10s |%-10s |\n","HORAS", $cabecera[0], $cabecera[1], $cabecera[2], $cabecera[3], $cabecera[4]);
    printf("|-----------------------------------------------------------------------|\n");
    printf("|%-10s |%-10s |%-10s |%-10s |%-10s |%-10s |\n", $horas[1], $asignaturas[0], $asignaturas[1], $asignaturas[2], $asignaturas[3], $asignaturas[4]);
    printf("|%-10s |%-10s |%-10s |%-10s |%-10s |%-10s |\n", $horas[2], $asignaturas[0], $asignaturas[1], $asignaturas[2], $asignaturas[3], $asignaturas[4]);
    printf("|%-10s |%-10s |%-10s |%-10s |%-10s |%-10s |\n", $horas[3], $asignaturas[0], $asignaturas[1], $asignaturas[2], $asignaturas[3], $asignaturas[4]);
    printf("|%-10s |%-10s |%-10s |%-10s |%-10s |%-10s |\n", $horas[4], $asignaturas[0], $asignaturas[1], $asignaturas[2], $asignaturas[3], $asignaturas[4]);
    printf("|-----------------------------------------------------------------------|\n");

?>