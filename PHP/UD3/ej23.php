<?php

    $numTrabajadores = readline("Cuantos trabajadores? ");

    $trabajadores=[];

    for($i=0;$i<$numTrabajadores;$i++){
        $nombre = readline("Nombre: ");
        $trabajadores[$nombre] = readline("Salario: ");
        
    }

?>