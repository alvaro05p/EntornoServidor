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
    
        $ganador = "";

        for($i = 0; $i < 3; $i++){
            
            if($tablero[$i][0] == " $caracter1 " && $tablero[$i][1] == " $caracter1 " && $tablero[$i][2] == " $caracter1 "){
                $ganador = $caracter1;
            }else if($tablero[$i][0] == " $caracter2 " && $tablero[$i][1] == " $caracter2 " && $tablero[$i][2] == " $caracter2 "){
                $ganador = $caracter2;
            }

            if($tablero[0][$i] == " $caracter1 " && $tablero[1][$i] == " $caracter1 " && $tablero[2][$i] == " $caracter1 "){
                $ganador = $caracter1;
            }else if($tablero[0][$i] == " $caracter2 " && $tablero[1][$i] == " $caracter2 " && $tablero[2][$i] == " $caracter2 "){
                $ganador = $caracter2;
            }

        }


        //Diagonales
        if($tablero[0][0] == " $caracter1 " && $tablero[1][1] == " $caracter1 " && $tablero[2][2] == " $caracter1 "){
            $ganador = $caracter1;
        }else if($tablero[0][0] == " $caracter1 " && $tablero[1][1] == " $caracter1 " && $tablero[2][2] == " $caracter1 "){
            $ganador = $caracter2;
        }

        if($tablero[2][0] == " $caracter1 " && $tablero[1][1] == " $caracter1 " && $tablero[0][2] == " $caracter1 "){
            $ganador = $caracter1;
        }else if($tablero[2][0] == " $caracter1 " && $tablero[1][1] == " $caracter1 " && $tablero[0][2] == " $caracter1 "){
            $ganador = $caracter2;
        }

        if($ganador != ""){
            return "Partida ganada por $ganador";
        }else{
            return false;
        }

        

        
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

            if(verificarGanador($tablero,$caracter1,$caracter2,$nombre1,$nombre2) != ""){
                echo verificarGanador($tablero,$caracter1,$caracter2,$nombre1,$nombre2);
                $continuar = false;
            }
            
        }
        
    }

    iniciarPartida($nombre1,$caracter1,$nombre2,$caracter2,$tablero);

?>