<?php

    /**
     * @author Álvaro Pardo Peralta
     */

    for($i = 0;$i<5;$i++){
        $num = readline("Numero: ");
        $numeros[$i]=$num;
    }

    $suma = 0;
    
    for($i = 0;$i<count($numeros); $i++){
        
        $suma += $numeros[$i];

    }

    $resultado = $suma / count($numeros);

    echo "Tu media: " . $resultado . "\n";

    echo "Redondeo: " . round($resultado) . "\n";
?>