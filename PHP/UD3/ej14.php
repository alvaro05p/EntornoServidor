<?php

    /**
     * @author Álvaro Pardo Peralta
     * Escribe una función que calcule todas las potencias de un número hasta llegar al exponente 
     * indicado, las almacene en un vector y muestre el resultado de cada potencia indicando además 
     * la suma de todas las potencias incluyendo la del exponente indicado
     */

    $base = readline("Base: ");
    $exponente = readline("Exponente deseado: ");

    for($i = 0; $i < $exponente; $i++){

        $resultado = pow($base, $i);

        echo $base . " elevado a " . $i . " = " . $resultado . "\n";

    }

?>