<?php

    $notas = [];

    for($i = 0; $i < 7; $i++){
        $n = $i+1;
        $nota = readline("Nota $n: ");
        array_push($notas, $nota);
    }

    $total=0;

    foreach($notas as $nota){
        $total += $nota;
    }

    $media = floor($total/7);

    echo "Media: $media\n";

    require("notas.php");

    echo correspondencia($media);
?>