<?php

    $posiciones=inicializarTablero();
    
    function inicializarTablero(){
        
        for($i=0;$i<3;$i++){
            for($x=0;$x<3;$x++){
                $posiciones[$i][$x] = " ";
            }
        }

        return $posiciones;
    }

    function imprimirTablero($posiciones){

        for($i=0;$i<3;$i++){
            for($x=0;$x<3;$x++){
                echo " ";
                echo $posiciones[$i][$x];
                //Para que no pinte la barra al final
                if($x!=2){
                    echo " |";
                }
            }
            echo "\n";
            echo "---|---|---";
            echo "\n";
        }

    }

    //Me han costado 20 min las 2 primeras funciones

    imprimirTablero($posiciones);

    function verificarGanador($posiciones){

        
        for($i=0;$i<3;$i++){
            for($x=0;$x<3;$x++){

                if($posiciones[$i][$x] != " "){

                    //Comprobar horizontales
                    if($posiciones[$i][1] === $posiciones[$i][0] && $posiciones[$i][1] === $posiciones[$i][2]){
                        echo "Tenemos ganador (horizontal)";
                    }
                    //Comprobar verticales
                    else if($posiciones[1][$x] === $posiciones[0][$x] && $posiciones[1][$x] === $posiciones[2][$x]){
                        echo "Tenemos ganador (vertical)";
                    }
                    //Comprobar diagonales
                    else if($posiciones[1][1] === $posiciones[0][0] && $posiciones[1][1] === $posiciones[2][2]){
                        echo "Tenemos ganador (diagonal)";
                    }
                    else if($posiciones[1][1] === $posiciones[0][2] && $posiciones[1][1] === $posiciones[2][0]){
                        echo "Tenemos ganador (diagonal)";
                    }
                    
                }
            }
        }

    }

    //Verificar ganador me ha costado otros 17 minutos

    function tableroLleno($posiciones){

        $lleno = "lleno";

        for($i=0;$i<3;$i++){
            for($x=0;$x<3;$x++){
               if($posiciones[$i][$x] == " "){
                    return false;
               }
            }
        }

        return true;
    }

    //Tablero lleno me habrá costado como 10 min

    function iniciarPartida($posiciones){

        inicializarTablero();

        $nombre1 = readline("Nombre jugador 1: ");
        $caracter1 = readline("Caracter jugador 1: ");
        $nombre2 = readline("Nombre jugador 2: ");
        $caracter2 = readline("Caracter jugador 2: "); 

        $jugador1 = [$nombre1, $caracter1];
        $jugador2 = [$nombre2, $caracter2];

        $partida = true;

        while($partida == true){
            $turno = $jugador1;

            $posicionX = readline("$turno[0] ($turno[1]), indica la fila(0-2) o escribe 's' para abandonar la partida: ");
            $posicionY = readline("$turno[0] ($turno[1]), indica la fila(0-2) o escribe 's' para abandonar la partida: ");
        
            $posiciones[$posicionX][$posicionY] = $turno[1];

            imprimirTablero($posiciones);

            if(tableroLleno($posiciones)){
                echo "Tablero lleno";
                $partida = false;
            }
        }

    }

    iniciarPartida($posiciones);

    //He llegado a hacer esto en 1 hora, bastante bien.

?>