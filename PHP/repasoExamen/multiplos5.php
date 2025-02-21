<?php


    echo "Con for:\n";
    for($i=1; $i <= 100; $i++){
        
        if($i%5 == 0){
            echo "$i\n";
        } 
    }

    echo "Con while:\n";
    $i=1;
    while($i <= 100){
        if($i%5 == 0){
            echo "$i\n";
        }
        $i++;  
    }

    echo "Con do while:\n";
    $i=1;
    do{
        if($i%5 == 0){
            echo "$i\n";
        }
        $i++;
    }while($i <= 100);

?>