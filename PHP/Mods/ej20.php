<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="ej20.php">
        <input type="text" name="hora" placeholder="Hora">
        <input type="submit" value="Saludar" name="saludar">
    </form>
</body>
</html>

<?php

    if(isset($_GET["saludar"])){

        $hora=$_GET["hora"];

        if(isset($hora) && is_numeric($hora)){
            switch($hora){
                case($hora >= 6 && $hora <= 12):
                    echo "Buenos dias";
                    break;
                case($hora >= 13 && $hora <= 20):
                    echo "Buenas tardes";
                    break;
                case($hora >= 21 || $hora <= 5):
                    echo "Buenas noches";
                    break;
            }
        }else{
            echo "La hora debe ser numérica";
        }
    }
    
?>
