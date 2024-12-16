<?php

    function generar(){
        return rand(1, 100);
    }

    $filas=[];
    $columnas=[];
    $matriz=[];

    for($i=0; $i<=10; $i++){
        for($x=0; $x<=10; $x++){
            $num = generar();
            $matriz[$i][$x] = $num;
            echo "$num ";
        }

        echo "\n";
    }

    for($i=0; $i<=10; $i++){
        $num = 0;
        for($x=0; $x<=10; $x++){
            $num += $matriz[$i][$x];
        }
        $filas[$i] = $num;
    }

    echo "Filas: \n";
    print_r($filas);

    for($i=0; $i<=10; $i++){
        $num = 0;
        for($x=0; $x<=10; $x++){
            $num += $matriz[$x][$i];
        }
        $columnas[$i] = $num;
    }

    echo "Columnas: \n";
    print_r($columnas);

?>