<?php

    /**
     * @author Álvaro Pardo Peralta
     * Escribe un programa que diga cuál es la penúltima cifra de un número entero introducido por 
     * teclado. Se permiten números de hasta 5 cifras
     */

    $num = readline("Numero: ");
    $length = strlen($num);

    if($length <= 5){
        echo "La penúltima cifra es " . $num[$length - 2] . "\n";
    }else{
        echo "Números de hasta 5 cifras" . "\n";
    }
?>