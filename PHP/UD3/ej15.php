<?php

    /**
     * @author Álvaro Pardo Peralta
     * Crea una función llamada permutaciones que reciba un vector $V y que cambie la posición de 
     * los elementos dicho vector haciendo permutaciones
     */

    function permutaciones($vector) {
        $length = count($vector); 
        
        //Recorremos la mitad del array
        for ($i = 0; $i < $length / 2; $i++) {
            
            //Guardamos el numero que queremos permutar en cada iteración
            $anterior = $vector[$i];
            //Mediante restar el numero actual y 1 a el largo del array obtenemos la posición contraria
            $vector[$i] = $vector[$length - $i - 1];
            //Damos un valor al numero anterior usado en la primera linea del bucle
            $vector[$length - $i - 1] = $anterior;
        }
        
        return $vector;
    }

    $array = [1, 2, 3, 4, 5, 6];
    var_dump(permutaciones($array));  

?>