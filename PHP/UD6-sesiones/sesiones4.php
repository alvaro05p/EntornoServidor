<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="sesiones4.php" method="GET">
        <label for="hora">Dia del mes:</label>
        <input type="text" name="dia">
        <input type="submit" name="enviar">
    </form>
</body>
</html>


<?php

    /**
     * @author Álvaro Pardo Peralta
    */
    
    session_start();

    if(isset($_GET["enviar"])){
        $_SESSION["dia"] = $_GET["dia"];
        if($dia < 15){
            echo "Primera quincena (" . $_SESSION['dia'] . ")";

            setcookie('anterior', strval("Primera quincena (" . $_SESSION['dia'] . ")"), time()+3600);

        }else if($dia >= 15){
            echo "Segunda quincena (" . $_SESSION['dia'] . ")";

            setcookie('anterior', strval("Segunda quincena (" . $_SESSION['dia'] . ")"), time()+3600);
        }else{
            echo "Introduzca un día valido";
        }

        if(isset($_COOKIE["anterior"])){
            echo " Anterior: " . $_COOKIE["anterior"];
        }
    }

?>

