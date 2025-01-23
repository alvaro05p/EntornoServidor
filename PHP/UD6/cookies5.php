<?php

    /**
     * @author Álvaro Pardo Peralta
    */

    $tipo = $_GET["tipo"];
    $num = $_GET["num"];

    if(isset($_GET["calcular"]) || ctype_digit($num)){

        if(isset($_COOKIE["anterior"])){
            echo "Anterior: " . $_COOKIE['anterior'];
        }

        if($tipo == "pesetas"){

            $resultado = $num / 166.386;
            echo "<h3>$num pesetas = $resultado €</h3>";
            setcookie('anterior', strval("$num pesetas = $resultado €"), time()+3600);
            echo "\n";

        }else if($tipo == "euros"){

            $resultado = $num * 166.386;
            echo "<h3>$num € = $resultado pesetas</h3>";
            setcookie('anterior', strval("$num € = $resultado pesetas"), time()+3600);
            echo "\n";

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
    <h1>Conversor euros / pesetas</h1>
    <form action="cookies5.php" method="GET">
        <input type="text" name="num">
        <select name="tipo">
            <option value="pesetas">Pesetas a euros</option>
            <option value="euros">Euros a pesetas</option>
        </select>
        <input type="submit" name="calcular">
    </form>
</body>
</html>