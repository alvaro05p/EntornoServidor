<?php

    function inicializarTablero(){
        $tablero = [];

        for($i=0;$i<3;$i++){
            for($x=0;$x<3;$x++){
                $tablero[$i][$x]=" ";
            }
        }

        return $tablero;
    }

    $tablero = inicializarTablero();

    function imprimirTablero($tablero){
        for($i=0;$i<3;$i++){
            for($x=0;$x<3;$x++){
                echo " ";
                echo $tablero[$i][$x];
                echo " ";
                if($x!=2){
                    echo "|";
                }
                
            }
            echo "\n";
            if($i!=2){
                echo "---|---|---";
                echo "\n";
            }
            
            
        }
    }

    function tableroLleno($tablero){

        $lleno = true;

        for($i=0;$i<3;$i++){
            for($x=0;$x<3;$x++){
                if($tablero[$i][$x] == " "){
                    $lleno = false;
                }
                
            }
        }

        if($lleno){
            return "lleno";
        }else{
            return "no lleno";
        }
    }

    function verificarGanador($tablero){

        $ganador = "";
        
        for($x=0;$x<3;$x++){
            if($tablero[$x][0] != " " && $tablero[$x][0] == $tablero[$x][1] && $tablero[$x][1] == $tablero[$x][2]){
                $ganador = $tablero[$x][0];
                
            }
            if($tablero[0][$x] != " " && $tablero[0][$x] == $tablero[1][$x] && $tablero[1][$x] == $tablero[2][$x]){
                $ganador = $tablero[0][$x];
                
            }
            if($tablero[0][0] != " " && $tablero[0][0] == $tablero[1][1] && $tablero[1][1] == $tablero[2][2]){
                $ganador = $tablero[0][0];
                
            }
            if($tablero[2][0] != " " && $tablero[2][0] == $tablero[1][1] && $tablero[1][1] == $tablero[0][2]){
                $ganador = $tablero[2][0];
                
            }

        }

        return $ganador;
        
    }

    $jugador1 = [];
    $jugador2 = [];
    $partida;

    
    $jugador1[0] = readline("Nombre jugador 1: ");
    $jugador1[1] = readline("Icono jugador 1: ");
    $jugador2[0] = readline("Nombre jugador 2: ");
    $jugador2[1] = readline("Icono jugador 2: ");

    //Partidas ganadas
    $jugador1[2]=0;
    $jugador2[2]=0;

    //Copas ganadas
    $jugador1[3]=0;
    $jugador2[3]=0;

    $torneos = true;

    $torneo = 0;

    while($torneos){

        $partida = 0;

        $partidas = true;

        $torneo++;

        echo "******Torneo " . $torneo . "******\n";

        while($partidas){

            $ganador = "";
    
            $partida++;
    
            echo "---Partida $partida---\n";
    
            $ganador = iniciarPartida($tablero, $jugador1, $jugador2);
    
            echo "Ganador de la partida: " . $ganador[0] . "\n";
    
            if($ganador[1] == $jugador1[1]){
                $jugador1[2]++;
            }else if($ganador[1] == $jugador2[1]){
                $jugador2[2]++;
            }
    
            echo $jugador1[0] . ": " . $jugador1[2] . "\n";
            echo $jugador2[0] . ": " . $jugador2[2] . "\n";
    
            
            if($jugador1[2] == 2){
                $jugador1[3]++;
                $partidas = false;
            }else if($jugador2[2] == 2){
                $jugador2[3]++;
                $partidas = false;
            }
    
        }

        $otro = readline("Otro torneo? (s)");

        if($otro != "s"){
            $torneos = false;
            echo "Vale, gracias por jugar \n";
        }

    }

    $patidas = 0;

    function iniciarPartida($tablero, $jugador1, $jugador2){

        $partida = true;
        $jugando = $jugador1;
        $ganador = "";

        while($partida){

            echo "Pulsa s para salir \n";
            $f = readline($jugando[0] . ", indica la fila: ");

            if($f != "s"){

                $c = readline($jugando[0] . ", indica la columna: ");

                if($f != "s"){
                    $tablero[$f][$c] = $jugando[1];

                    imprimirTablero($tablero);
    
                    if($jugando == $jugador1){
                        $jugando = $jugador2;
                    }else{
                        $jugando = $jugador1;
                    }

                    if(verificarGanador($tablero) != ""){
                        $partida = false;
                        if(verificarGanador($tablero) == $jugador1[1]){
                            $ganador = $jugador1;
                        }else if(verificarGanador($tablero) == $jugador2[1]){
                            $ganador = $jugador2;
                        }

                    }
                }else{
                    $partida = false;
                }

            }else{
                $partida = false;
            }

            
        }

        return $ganador;

    }

?>