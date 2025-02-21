<?php

    $cabecera = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];
    $horario = [
        ['14:10', 'DWEC', 'DWEC', '--', 'DWES', 'EIE'],
        ['15:05', 'DWEC', 'DWEC', '--', 'DWES', 'DWES'],
        ['16:00', 'DWES', 'DIW', '--', 'EIE', 'DWES'],
        ['16:55', 'P', 'A', 'T', 'I', 'O'],
        ['17:15', 'DWES', 'DIW', 'DWEC', 'DIW', 'DIW'],
        ['18:10', 'EIE', 'DWES', 'DAW', 'DIW', 'DIW'],
        ['19:05', 'DAW', 'DWES', 'DAW', 'DAW', '--'],
        ['20:00', 'DAW', '--', 'TUT', 'DAW', '--']
    ];

    //Esto deja un mínimo de 5 espacios
    printf("|-----------------------------------------------|\n");

    printf("| %-5s | %-6s | %-9s | %-6s | %-7s |\n", ...$cabecera);
    foreach($horario as $fila) {
        printf("| %-5s | %-6s | %-9s | %-6s | %-7s |\n", ...$fila);
    }

    printf("|-----------------------------------------------|\n");
?>