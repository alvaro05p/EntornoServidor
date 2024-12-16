<?php

    $A = [];
    $B = [];
    $mix = [];

    for($i=1; $i<=5; $i++){
        $num = readline("Num $i: ");
        array_push($A, $num);
    }

    print_r($A);

    for($i=1; $i<=5; $i++){
        $num = readline("Num $i: ");
        array_push($B, $num);
    }

    print_r($B);

    for($i=0; $i<5; $i++){
        array_push($mix, $A[$i]);
        array_push($mix, $B[$i]);
    }

    print_r($mix);

?>