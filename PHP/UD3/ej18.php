<?php

    $num = readline("Numero: ");

    for($i = 0; $i < strlen($num); $i++){

        
        if($i == round(strlen($num)/2)){
            if(strlen($num)%2 != 0){
                
                echo $num[$i-1] . "\n";

            }else if(strlen($num)%2 == 0){
                echo $num[$i-1] . $num[$i] ."\n";

            }
        }
    }

?>