<?php

    /**
     * @author Álvaro Pardo Peralta
     * Diseña un programa que determine la cantidad total a pagar por una llamada telefónica de 
     * acuerdo a las siguientes premisas: Toda llamada que dure menos de 3 minutos tiene un coste de 
     * 10 céntimos. Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 
     * céntimos
     */

    $tiempo = $_GET["mins"];

    if($tiempo < 3){
        echo "Coste: 10cent" . "\n";
    }else{
        //Con esta operación muliplicamos por 5 los minutos que van despues de los dos primeros
        $coste = (($tiempo - 2) * 5) + 10;
        echo "Coste: " . $coste . "cent" . "\n";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="ej7.php" method="GET">
        <label for="mins">Minutos de la llamada:</label>
        <input type="text" name="mins">
    </form>
</body>
</html>