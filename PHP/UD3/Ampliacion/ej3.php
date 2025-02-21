<?php

    /**
     * @author Álvaro Pardo Peralta
     * Escribe un programa que calcule la media aritmética de 7 notas y la muestre junto con su 
     * correspondencia en el boletín que has realizado en el ejercicio anterior
     */

    $total = 0;

    //Bucle que se recorre 7 veces
    for($i=1;$i<=7;$i++){
        $nota = readline("Nota " . $i . ": ");
        $total += $nota;
    }

    $media = $total / 7;

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

    echo $media . ", " . boletin($media) . "\n";


   
?>