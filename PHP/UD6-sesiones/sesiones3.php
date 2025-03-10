<?php

/**
 * @author Álvaro Pardo Peralta
*/

session_start();

if (isset($_POST['enviar'])) {
    //Recogemos los datos del formulario con el método get
    
    $num1 = $_POST["n1"];
    $num2 = $_POST["n2"];
    $operacion = $_POST['operacion'];

    setcookie('num1', strval($num1), time()+3600);
    setcookie('num2', strval($num2), time()+3600);
    setcookie('operacion', $operacion, time()+3600);
    
    echo "Cookies:";
    echo "<br>";
    echo "Num1: " . $_COOKIE['num1'] . " ";
    echo "Num2: " . $_COOKIE['num2'] . " ";
    echo "Operación: ";
    echo $_COOKIE['operacion'];
    
    echo "<br>";
    echo "<br>";

}

if (ctype_digit($num1) && ctype_digit($num2)) {

    switch ($operacion){
        case "suma":
            $_SESSION["suma"] = $num1 + $num2;
            echo $num1 . "+" . $num2 . "=" . $_SESSION["suma"] . "\n";
            break;
        case "resta":
            $_SESSION["resta"] = $num1 - $num2;
            echo $num1 . "-" . $num2 . "=" . $_SESSION["resta"] . "\n";
            break;

        case "mult":
            $_SESSION["mult"] = $num1 * $num2;
            echo $num1 . "*" . $num2 . "=" . $_SESSION["mult"] . "\n";
            break;
        case "div":
            if($num2 != 0){
                $_SESSION["divi"] = $num1 / $num2;
                echo $num1 . "/" . $num2 . "=" . $_SESSION["divi"] . "\n";
            }else{
                echo "El divisor no puede ser 0";
            }
            
            break;
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
<form method="POST" action="sesiones3.php">
    <input name="n1" type="text">
    <select name="operacion" multiple size="4">
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

