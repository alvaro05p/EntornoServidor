<?php
session_start();

    echo "Estudios: " . $_SESSION["estudios"];
    echo "<br>";

    echo "Situación: ";
    foreach($_SESSION["situacion"] as $situacion){
        
        echo $situacion . " ";
        
    }
    echo "<br>";

    if(isset($_SESSION["hobbie"])){
        foreach($_SESSION["hobbie"] as $hobbie){
            echo "Hobbies: " . $hobbie;
            echo "<br>";
        }
    }else{
        echo  "Hobbies: " . $_SESSION["otros"];
        echo "<br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="styles.css">
</head>
</html>