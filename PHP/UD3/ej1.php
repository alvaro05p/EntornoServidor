<?php

    /**
     * @author Álvaro Pardo Peralta
     * Elabora un programa que dado un carácter determine si es:
     */

function tipoCaracter($caracter) {
    switch (true) {
        // letra mayúscula
        case ctype_upper($caracter):
            echo "letra mayúscula.\n";
            break;
        // letra minúscula
        case ctype_lower($caracter):
            echo "letra minúscula\n";
            break;
        // carácter numérico
        case ctype_digit($caracter):
            echo "carácter numérico\n";
            break;
        // carácter blanco
        case ctype_space($caracter):
            echo "carácter blanco\n";
            break;
        // carácter de puntuación
        case ctype_punct($caracter):
            echo "carácter de puntuación\n";
            break;
        // carácter especial
        default:
            echo "carácter especial\n";
            break;
    }
}

$caracter = readline(); 
tipoCaracter($caracter);

?>
