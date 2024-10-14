<?php

    /**
     * @author Álvaro Pardo Peralta
     * Crear una matriz de tamaño 5x5 y rellenarla de la siguiente forma: la posición M[n,m] debe 
     * contener n+m. Después se debe mostrar su contenido
     */

    $matriz=[];

    for($i=0;$i<5;$i++){
        for($x=0;$x<5;$x++){
            $matriz[$i][$x] = $x + $i; 
        }
    }


    print_r($matriz);
?>