<?php

    /**
     * @author Álvaro Pardo Peralta
     * Escribe una función que calcule A elevado a B, siendo A y B números enteros.
     */

    $base = readline("Base: ");
    $exponente = readline("Elevado a: ");

    $resultado = pow($base, $exponente);

    echo $base . "elevado a " . $exponente . " = " . $resultado;

?>