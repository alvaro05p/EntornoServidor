<?php

    /**
     * @author Álvaro Pardo Peralta
     * Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El 
     * programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje 
     * “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto 
     * satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte
     */

    $pin = rand(1000,9999);
    echo $pin;

    for($i = 0; $i<4; $i++){
        $introducido = readline("Teclee el pin: ");

        if($introducido == $pin){
            echo "Pin correcto" . "\n";
            $i = 4;
        }else{
            $i++;
            echo "Pin incorrecto" . "\n";
            echo "Intentos: " . 4 - $i . "\n";
        }

    }



?>