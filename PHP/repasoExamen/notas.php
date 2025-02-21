<?php

//$nota = readline("Nota del examen: ");

function correspondencia($nota){
    
    if($nota <= 10 && $nota >= 0){
        if($nota >= 9){
            return "Sobresaliente\n";
        }else if($nota >= 7){
            return "Notable\n";
        }else if($nota == 6){
            return "Bien\n";
        }else if($nota == 5){
            return "Suficiente\n";
        }else{
            return "Insuficiente\n";
        }
    }else{
        return "La nota tiene que ser entre 1 y 10\n";
    }
    
}

//echo correspondencia($nota);

?>