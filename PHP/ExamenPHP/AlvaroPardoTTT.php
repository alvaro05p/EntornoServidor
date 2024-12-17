<?php

    $tablero = [];

    function inicializarTablero(){

        for($i=0;$i<3;$i++){
            echo "|";
            for($x=0;$x<3;$x++){
                echo "   ";
                echo "|";
            }
            echo "\n";
            echo "|---|---|---|\n";
        }
    }

    function imprimirTablero($tablero, $fila, $columna, $caracter){

        
        //Tengo el tablero con todo en blanco y le voy asignando signos en posiciones
        for($i=0;$i<3;$i++){
            echo "|";
            for($x=0;$x<3;$x++){
                echo $tablero[$x][$i];
                echo "|";
            }
            echo "\n";
            echo "|---|---|---|\n";
        }

    }

    function verificarGanador($tablero,$caracter1,$caracter2,$nombre1, $nombre2){

        print_r($tablero);
        $cont1 = 0;
        $cont2 = 0;
        for($i = 0; $i < 3; $i++){
            if($tablero[0][$i] = $caracter1){
                $cont1++;
            }else if($tablero[0][$i] = $caracter2){
                $cont2++;
            }
        }
        echo "Cont1 : $cont1";
        echo "Cont2 : $cont2";

        echo "\n";
    }

    $nombre1=readline("Nombre juagador 1: ");
    $caracter1=readline("Caracter Jugador 1 : ");
    $nombre2=readline("Nombre juagador 2: ");
    $caracter2=readline("Caracter Jugador 2 : ");

    function iniciarPartida($nombre1,$caracter1,$nombre2,$caracter2,$tablero){

        for($i=0;$i<3;$i++){
            for($x=0;$x<3;$x++){
                $tablero[$i][$x] = "   ";
            }
        }
        $tablero = $tablero;
        
        $continuar = true;
        $nombre = $nombre1;
        $caracter = $caracter1;
        $fila=" ";
        $columna=" ";
        inicializarTablero();
        while($continuar){

            $fila = readline("$nombre ($caracter), indica la fila (0-2) o escribe 's' para abandonar la partida: ");
            $columna = readline("$nombre ($caracter), indica la columna (0-2) o escribe 's' para abandonar la partida: ");

            if($fila == "s" || $columna == "s"){
                exit;
            }

            $tablero[$fila][$columna] = " $caracter ";

            imprimirTablero($tablero,$fila,$columna,$caracter);
            
            if($nombre == $nombre1){

                $nombre = $nombre2;
                $caracter = $caracter2;
            }else if($nombre = $nombre2){
                $nombre = $nombre1;
                $caracter = $caracter1;
            }

            verificarGanador($tablero,$caracter1,$caracter2,$nombre1,$nombre2);
            
        }
        
    }

    iniciarPartida($nombre1,$caracter1,$nombre2,$caracter2,$tablero);

?>