<?php

    $clave = rand(1111, 9999);
    echo "$clave \n";
    for($i = 0;$i <= 4;$i++){
        $intento = readline("Contraseña ****: ");
        if($intento == $clave){
            echo "La caja fuerte se ha abierto satisfactoriamente \n";
            $i=4;
        }else{
            echo "Lo siento, esa no es la combinación (faltan " . 4-$i . " intentos) \n";
        }
    }
?>