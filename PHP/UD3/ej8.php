<?php

    /**
     * @author Álvaro Pardo Peralta
     * Crea la tabla de multiplicar a partir de un número
     */

    $num = readline("Numero de la tabla: ");

    for($i = 1; $i<=10; $i++){
        echo $num . " x " . $i . " = " . $i * $num . "\n";
    }

?>