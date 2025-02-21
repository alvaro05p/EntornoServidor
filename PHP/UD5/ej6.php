<?php

    /**
     * @author Álvaro Pardo Peralta
     * Elabora un programa para determinar si una hora leída en la forma horas, minutos y segundos 
     * está correctamente expresada.
     */
    //$hora = readline("Introducir hora hh:mm:ss => ");

    $hora = $_GET["hora"];
    
    //Asignamos un número incorrecto para que si el usario no introduce alguno, no lo de por bueno
    $partes[0]=100;
    $partes[1]=100;
    $partes[2]=100;

    $partes = explode(":", $hora);

    if($partes[0] < 24 && $partes[1] < 60 && $partes[2] < 60){
        echo "Formato correcto";
    }else{
        echo "Formato incorrecto";
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
    <h1>Formateo de hora</h1>
    <form action="ej6.php" method="GET">
        <input type="text" name="hora">
        <input type="submit" placeholder="00:00:00" name="comprobar">
    </form>
</body>
</html>