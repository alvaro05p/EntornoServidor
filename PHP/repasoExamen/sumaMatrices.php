<?php

    $matriz1=[];
    $matriz2=[];
    $suma=[];

    function generar(){
        return rand(1, 100);
    }

    for($i=0; $i<=3; $i++){
        for($x=0; $x<=3; $x++){
            $num = generar();
            $matriz1[$i][$x] = $num;
        }
    }

    for($i=0; $i<=3; $i++){
        for($x=0; $x<=3; $x++){
            $num = generar();
            $matriz2[$i][$x] = $num;
        }
    }

    //Suma de matrices
    for($i=0; $i<=3; $i++){
        for($x=0; $x<=3; $x++){
            $sumado = $matriz1[$i][$x] + $matriz2[$i][$x];
            $suma[$i][$x]=$sumado;
        }
    }

    print_r($suma);

?>