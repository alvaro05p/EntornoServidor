<?php

    $nums = [];

    for($i=1; $i<=8; $i++){
        $num = readline("Numero $i: ");
        if($num%2 == 0){
            $meter = $num . "par";
        }else{
            $meter = $num . "impar";
        }

        array_push($nums,$meter);
    }

    print_r($nums);

?>