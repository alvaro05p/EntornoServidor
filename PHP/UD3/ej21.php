<?php

    $num = readline("Numero: ");
    $length = strlen($num);

    if($length <= 5){
        echo "La penúltima cifra es " . $num[$length - 2] . "\n";
    }else{
        echo "Números de hasta 5 cifras" . "\n";
    }
?>