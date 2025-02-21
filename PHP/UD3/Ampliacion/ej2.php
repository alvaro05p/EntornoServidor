<?php

    /**
     * @author Álvaro Pardo Peralta
     * Escribe un programa que dada una nota (entera) indique su correspondencia en el boletín (Ejemplo 5 sería SUFICIENTE)
     */

    $nota = readline("Nota: ");

    //Lo hago con un if ya que creo que ocuparía menos lineas que un switch

    function boletin($nota){

        if($nota > 10){

            return "La nota no puede ser superior a 10";
        
        }else if($nota >= 9){
    
            return "Sobresaliente";
    
        }else if($nota >= 7){
            
            return "Notable";
    
        }else if($nota >= 6){
    
            return "Bien";
    
        }else if($nota >= 5){
    
            return "Suficiente";
    
        }else{
    
            return "Insuficiente";
        }

    }

    echo boletin($nota) . "\n";    

?>