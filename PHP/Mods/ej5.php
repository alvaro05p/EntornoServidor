<?php

    /**
     * @author Álvaro Pardo Peralta
    */

    function tipoCaracter($caracter) {
        switch (true) {
            // letra mayúscula
            case ctype_upper($caracter):
                echo "letra mayúscula.\n";
                break;
            // letra minúscula
            case ctype_lower($caracter):
                echo "letra minúscula\n";
                break;
            // carácter numérico
            case ctype_digit($caracter):
                echo "carácter numérico\n";
                break;
            // carácter blanco
            case ctype_space($caracter):
                echo "carácter blanco\n";
                break;
            // carácter de puntuación
            case ctype_punct($caracter):
                echo "carácter de puntuación\n";
                break;
            // carácter especial
            default:
                echo "carácter especial\n";
                break;
        }
    }
    
    $caracter = $_GET["caracter"];
    
    if(isset($_GET["comprobar"]) && strlen($caracter) == 1){
        tipoCaracter($caracter);
        
    }else{
        echo "Debe ser un solo caracter";
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <h1>Tipo de caracter</h1>
    <form action="ej5.php" method="GET">
        <input type="text" name="caracter" placeholder="Introduce un caracter">
        <input type="submit" name="comprobar">
    </form>
</body>
</html>