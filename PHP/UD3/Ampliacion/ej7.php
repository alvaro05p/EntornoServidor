<?php

    /**
     * @author Álvaro Pardo Peralta
     * Define tres arrays de 20 números enteros cada uno, con nombres “numero”, “cuadrado” y 
     * “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se 
     * deben almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” 
     * se deben almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el 
     * contenido de los tres arrays dispuesto en tres columnas
     */

    $nums=[];
    $cuadrados = [];
    $cubos = [];

    //Bucle que crea los numeros aleatorios y los mete en el array ya multiplicados si es necesario
    for($i=1;$i<=20;$i++){
        $num = rand(0,100);
        array_push($nums,$num);
        array_push($cuadrados,pow($num,2));
        array_push($cubos,pow($num,3));
    }

    for($i=0;$i<20;$i++){
        echo $nums[$i] . "\t" . $cuadrados[$i] . "\t" . $cubos[$i] . "\n";
    }

?>