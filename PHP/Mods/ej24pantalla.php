<?php
session_start();

    echo "Nombre: " . $_SESSION["nombre"];
    echo "<br>";
    echo "Apellidos: " . $_SESSION["apellidos"];
    echo "<br>";
    echo "Edad: " . $_SESSION["edad"];
    echo "<br>";
    echo "Peso: " . $_SESSION["peso"];
    echo "<br>";
    echo "Sexo: " . $_SESSION["sexo"];
    echo "<br>";
    echo "Estado civil: " . $_SESSION["estadoCivil"];
    echo "<br>";

    echo "Hobbies: ";
    foreach($_SESSION["hobbies"] as $hobbie){
        
        echo $hobbie . " ";
        
    }
    echo "<br>";


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