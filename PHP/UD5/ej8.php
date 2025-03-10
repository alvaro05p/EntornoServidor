

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej8</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="ej8.php" method="GET">
        <label for="hora">Introduce la hora:</label>
        <input type="text" name="hora" placeholder="hh:mm:ss">
    </form>
</body>
</html>

<?php

    /**
     * @author Álvaro Pardo Peralta
     * Calcula, dada la fecha y hora actual y la fecha y hora deseada, cuántas horas y minutos quedan 
     * para dicho momento.
     */

    date_default_timezone_set('Europe/Madrid');

    $hora = date("G");

    $minuto = date("i");

    $segundo = date("s");

    $horaIntroducida =  $_GET["hora"];

    $separado = explode(":", $horaIntroducida);


    //Si la hora actual es menor que la introducida
    if($hora < $separado[0]){

        //En este caso podemos restar
        $horasRestantes =  $separado[0] - $hora;
        

    }else{

        //En este otro caso saldrá un numero negativo al que deberemos sumarle 24
        $horasRestantes = ($separado[0] - $hora) + 24;
    
    }

    if($minuto < $separado[1]){

        $minutosRestantes = $separado[1] - $minuto;

    }else{

        //Aqui sabemos cuantos minutos faltan para completar la hora
        $paraEnPunto = 60 - $minuto;
        $minutosRestantes = $separado[1] + $paraEnPunto;
        $horasRestantes++;

    }

    if($segundo < $separado[2]){

        $segundosRestantes = $separado[2] - $segundo;

    }else{

        $paraEnPunto = 60 - $segundo;
        $segundosRestantes = $separado[2] + $paraEnPunto;
        $minutosRestantes++;

    }

    echo $horasRestantes . ":" . $minutosRestantes . ":" . $segundosRestantes . "\n";

?>