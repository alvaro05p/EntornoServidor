<?php

    /**
     * @author Álvaro Pardo Peralta
     * Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El 
     * programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje 
     * “Lo siento, esa no es la combinación” en rojo y si acertamos se nos dirá “La caja fuerte se ha abierto 
     * satisfactoriamente” en verde. Tendremos cuatro oportunidades para abrir la caja fuerte.
     */

    $mensaje = "";

    $probar=true;

    $pin = "8071";
    
    echo $pin . " Intentos: " . $_COOKIE["intentos"];

    setcookie('pin', strval($pin), time()+3600);

    if(!isset($_COOKIE["intentos"])){

        setcookie('intentos', strval(4), time()+3600);
    
    }

    $_SESSION["abrir"] = $_GET["abrir"];

    $_SESSION["pin"] = $_GET["pin"];

    if (isset($_SESSION["abrir"])) {
        
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_SESSION["pin"])) {
            $introducido = $_SESSION["pin"];

            if($introducido == $_COOKIE["pin"]){
                $mensaje = "<p style='color: green;'>Pin correcto</p>";
            }else{
                $mensaje = "<p style='color: red;'>Pin incorrecto</p>";
                $intentos = intval($_COOKIE["intentos"]);
                $intentos--;
                setcookie('intentos', strval($intentos), time()+3600);
            }
    
            if($_COOKIE["intentos"] == 0){
                $mensaje = "<p style='color: red;'>Demasiados intentos</p>";
                setcookie('intentos', strval(4), time()+3600);
            }
        }

    }

    echo $mensaje;
    echo "<br>";
    echo "";

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
    <form action="sesiones7.php" method="GET">
        <input type="text" name="pin" maxlength="4">
        <input type="hidden" name="foto_url" value="<?php echo $intentos ?>">
        <input type="submit" value="Abrir" name="abrir">
    </form>

</body>
</html>