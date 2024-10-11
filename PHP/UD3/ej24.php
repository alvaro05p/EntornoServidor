<?php

    /**
     * @author Álvaro Pardo Peralta
     * Con los trabajadores del ejercicio anterior, calcular el salario actual y el salario aumentado un 
     * porcentaje indicado por la variable
     */

    $numTrabajadores = readline("Cuantos trabajadores? ");

    $porcentaje = readline("Aumento de sueldo (%): ");

    $trabajadores=[];

    for($i=0;$i<$numTrabajadores;$i++){
        $nombre = readline("Nombre: ");
        $salario = readline("Salario: ");
        //Se añada a todos los trabajadores el porcentaje correspondiente
        $aumento = ($salario * $porcentaje) / 100; 
        $salario += $aumento;
        $trabajadores[$nombre] = $salario;
    }

    var_dump($trabajadores);



?>