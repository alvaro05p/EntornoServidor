<?php

    /**
     * @author Álvaro Pardo Peralta
     * Crear y rellenar por teclado dos matrices de tamaño 3x3, sumarlas y mostrar su suma.
     */

    $matriz = [];
    $suma = 0;

    for($i=1;$i<=3;$i++){
        for($x=1;$x<=3;$x++){
            $matriz[$i][$x] = readline("Posición " . $i . ", " . $x . ": ");
            $suma += $matriz[$i][$x];
        }
    }

    echo "Suma: " . $suma . "\n";

?>