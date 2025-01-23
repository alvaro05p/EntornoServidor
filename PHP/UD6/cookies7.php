<?php

    /**
     * @author Álvaro Pardo Peralta
     * Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El 
     * programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje 
     * “Lo siento, esa no es la combinación” en rojo y si acertamos se nos dirá “La caja fuerte se ha abierto 
     * satisfactoriamente” en verde. Tendremos cuatro oportunidades para abrir la caja fuerte.
     */

    if (!isset($_GET["pin"])) {
        $pin = rand(1000,9999);
        $intentos = 4;
    }

    $mensaje = "";

    echo $pin;

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["pin"])) {
        $introducido = $_GET["pin"];
        if($introducido == $_GET["pin"]){
            $mensaje = "<p style='color: green;'>Pin correcto</p>";
        }else{
            $mensaje = "<p style='color: red;'>Pin incorrecto</p>";
            $_GET['intentos'] --;
        }

        if($intentos = 0){
            $mensaje = "<p style='color: red;'>Demasiados intentos</p>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja fuerte</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Inserte el pin de la caja fuerte</h1>
    <form action="cookies7.php" method="GET">
        <input type="text" name="pin" maxlength="4">
        <input type="submit" value="Abrir">
    </form>

    <?php echo $mensaje; ?>
</body>
</html>