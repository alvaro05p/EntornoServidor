<?php

    /**
     * @author Álvaro Pardo Peralta
    */

    if (isset($_GET['enviar'])) {
        //Recogemos los datos del formulario con el método get
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $num1 = $_GET['n1'];
            $num2 = $_GET['n2'];
            $operacion = $_GET['operacion'];
        }

    }

    if (ctype_digit($num1) && ctype_digit($num2)) {

        foreach($operacion as $calc){

            switch ($calc){
                case "suma":
                    $suma = $num1 + $num2;
                    echo $num1 . "+" . $num2 . "=" . $suma . "\n";
                    break;
                case "resta":
                    $resta = $num1 - $num2;
                    echo $num1 . "-" . $num2 . "=" . $resta . "\n";
                    break;
    
                case "mult":
                    $multi = $num1 * $num2;
                    echo $num1 . "*" . $num2 . "=" . $multi . "\n";
                    break;
                case "div":
                    if($num2 != 0){
                        $divi = $num1 / $num2;
                        echo $num1 . "/" . $num2 . "=" . $divi . "\n";
                    }else{
                        echo "El divisor no puede ser 0";
                    }
                    
                    break;
    
            }
    
        }

    }else{
        echo "Error en los valores numéricos";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mates</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="ej1.php" method="get">
        <input name="n1" type="text">
        <select name="operacion[]" multiple size="4">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="mult">x</option>
            <option value="div">/</option>
        </select>
        <input name="n2" type="text">
        <input type="submit" value="Calcular" name="enviar">
    </form>
</body>
</html>