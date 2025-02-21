<?php

    /**
     * @author Álvaro Pardo Peralta
     * Crea la tabla de multiplicar a partir de un número
     */

    session_start();

    $_SESSION["num"] = $_GET["num"];
    $anteriores = "";

    for($i = 1; $i<=$_SESSION["num"]; $i++){
        echo "<br>" . $_SESSION["num"] . " x " . $i . " = " . $i * $_SESSION["num"];
        $anteriores .= "<br>" . $_SESSION["num"] . " x " . $i . " = " . $i * $_SESSION["num"];
    }

    echo "<br>";

    setcookie('anterior', strval($anteriores), time()+3600);

    if(isset($_COOKIE["anterior"])){
        echo  "<br>" . "Anterior: " . "<br>";
        print_r($_COOKIE["anterior"]);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej6</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="sesiones6.php">
        <br>
        <label for="num">Seleccionar numero:</label>
        <select name="num">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <input type="submit" name="enviar">
    </form>
</body>
</html>