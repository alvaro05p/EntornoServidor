<?php

    $numTrabajadores = readline("Cuantos trabajadores? ");

    $porcentaje = readline("Aumento de sueldo (%): ");

    $trabajadores=[];

    for($i=0;$i<$numTrabajadores;$i++){
        $nombre = readline("Nombre: ");
        $salario = readline("Salario: ");
        $aumento = ($salario * $porcentaje) / 100; 
        $salario += $aumento;
        $trabajadores[$nombre] = $salario;
    }

    var_dump($trabajadores);



?>