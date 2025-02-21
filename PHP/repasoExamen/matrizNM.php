<?php

    $matriz = [];

    for($i=0; $i<5; $i++){
        for($x=0; $x<5; $x++){
            $num = $i + $x;
            $matriz[$i][$x] = $num;
        }
    }

    print_r($matriz);

?>