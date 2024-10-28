<?php

    /**
     * @author Álvaro Pardo Peralta
    */

    if(isset($_GET["enviar"])){
        $dia = $_GET["dia"];
        if($dia < 15){
            echo "Primera quincena";
        }else if($dia >= 15){
            echo "Segunda quincena";
        }else{
            echo "Introduzca un día valido";
        }
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
    <form action="ej2.php" method="GET">
        <label for="hora">Dia del mes:</label>
        <input type="text" name="dia">
        <input type="submit" name="enviar">
    </form>
</body>
</html>

