<?php

    $cabecera = ["Hora", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];
    $clases = [
        ["14:10", "DWEC", "DWEC", "--", "DWES", "EIE"],
        ["14:10", "DWEC", "DWEC", "--", "DWES", "EIE"],
        ["14:10", "DWEC", "DWEC", "--", "DWES", "EIE"],
        ["14:10", "DWEC", "DWEC", "--", "DWES", "EIE"],
        ["14:10", "DWEC", "DWEC", "--", "DWES", "EIE"],
        ["14:10", "DWEC", "DWEC", "--", "DWES", "EIE"]
    ];

    //Esto deja un mínimo de 5 espacios
    printf("|-----------------------------------------------------------------------|\n");
    printf("|%-10s |%-10s |%-10s |%-10s |%-10s |%-10s |\n", ...$cabecera);
    printf("|-----------------------------------------------------------------------|\n");

    foreach($clases as $clase){
        printf("|%-10s |%-10s |%-10s |%-10s |%-10s |%-10s |\n", ...$clase);
    }

    printf("|-----------------------------------------------------------------------|\n");
    

?>