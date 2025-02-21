<?php

    /**
     * @author Álvaro Pardo Peralta
     * Crear y rellenar una tabla de tamaño 10x10, mostrar la suma de cada fila y de cada columna
     */



     for($i=1;$i<=10;$i++){

        $suma = 0;

        for($x=1;$x<=10;$x++){
            $matriz[$i][$x] = readline("Posición " . $i . ", " . $x . ": ");
            $suma += $matriz[$i][$x];
        }
        echo "Suma de la fila $i: $suma \n";
    }
?>