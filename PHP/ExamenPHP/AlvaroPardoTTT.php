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
                $ganador = $nombre1;
            }else if($tablero[$i][0] == " $caracter2 " && $tablero[$i][1] == " $caracter2 " && $tablero[$i][2] == " $caracter2 "){
                $ganador = $nombre2;
            }

            if($tablero[0][$i] == " $caracter1 " && $tablero[1][$i] == " $caracter1 " && $tablero[2][$i] == " $caracter1 "){
                $ganador = $nombre1;
            }else if($tablero[0][$i] == " $caracter2 " && $tablero[1][$i] == " $caracter2 " && $tablero[2][$i] == " $caracter2 "){
                $ganador = $nombre2;
            }

        }


        //Diagonales
        if($tablero[0][0] == " $caracter1 " && $tablero[1][1] == " $caracter1 " && $tablero[2][2] == " $caracter1 "){
            $ganador = $nombre1;
        }else if($tablero[0][0] == " $caracter1 " && $tablero[1][1] == " $caracter1 " && $tablero[2][2] == " $caracter1 "){
            $ganador = $nombre2;
        }

        if($tablero[2][0] == " $caracter1 " && $tablero[1][1] == " $caracter1 " && $tablero[0][2] == " $caracter1 "){
            $ganador = $nombre1;
        }else if($tablero[2][0] == " $caracter1 " && $tablero[1][1] == " $caracter1 " && $tablero[0][2] == " $caracter1 "){
            $ganador = $nombre2;
        }

        if($ganador != ""){
            return $ganador;
        }else{
            return "";
        }
        
    }

    function iniciarPartida($nombre1,$caracter1,$nombre2,$caracter2,$tablero){

        for($i=0;$i<3;$i++){
            for($x=0;$x<3;$x++){
                $tablero[$i][$x] = "   ";
            }
        }
        
        $continuar = true;
        $nombre = $nombre1;
        $caracter = $caracter1;
        $fila=" ";
        $columna=" ";
        inicializarTablero();
        $ganador = "";
        while($continuar){

            $fila = readline("$nombre ($caracter), indica la fila (0-2) o escribe 's' para abandonar la partida: ");
            $columna = readline("$nombre ($caracter), indica la columna (0-2) o escribe 's' para abandonar la partida: ");

            if($fila == "s" || $columna == "s"){
                exit;
            }

            $tablero[$fila][$columna] = " $caracter ";

            system('clear');

            imprimirTablero($tablero,$fila,$columna,$caracter);
            
            if($nombre == $nombre1){

                $nombre = $nombre2;
                $caracter = $caracter2;
            }else if($nombre = $nombre2){
                $nombre = $nombre1;
                $caracter = $caracter1;
            }

            if(verificarGanador($tablero,$caracter1,$caracter2,$nombre1,$nombre2) != ""){
                $ganador = verificarGanador($tablero,$caracter1,$caracter2,$nombre1,$nombre2);
                return $ganador;
                $continuar = false;
            }
            
        }
        
    }

    system('clear');
    $nombre1=readline("Nombre juagador 1: ");
    $caracter1=readline("Caracter Jugador 1 : ");
    system('clear');
    $nombre2=readline("Nombre juagador 2: ");
    $caracter2=readline("Caracter Jugador 2 : ");

    function torneo($nombre1,$caracter1,$nombre2,$caracter2,$tablero){

        $partidas = 0;
        $jugador1 = 0;
        $jugador2 = 0;
        $i = 1;

        system('clear');

        echo "Torneo al mejor de 3: ";

        while($jugador1 < 2 && $jugador2 < 2){
            
            echo "Partida $i \n";
            
            $ganador = iniciarPartida($nombre1,$caracter1,$nombre2,$caracter2,$tablero);
            system('clear');
            echo "Ganador partida $i: $ganador\n";
            
            if($ganador == $nombre1){
                $jugador1 ++;
            }else if($ganador == $nombre2){
                $jugador2 ++;
            }
            $i++;
        };

        if($jugador1 > $jugador2){
            echo "Ganador del torneo: $nombre1\n";
        }else{
            echo "Ganador del torneo: $nombre2\n";
        }
        
    }

    torneo($nombre1,$caracter1,$nombre2,$caracter2,$tablero);

?>