<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="sesiones2.php">
        <input type="text" name="nombre" placeholder="nombre" value="<?php echo isset($_SESSION["nombre"]) ? $_SESSION["nombre"] : ''; ?>">
        <select name="idioma">
            <option value="Español" 
            <?php
                if(isset($_SESSION["idioma"]) && $_SESSION["idioma"] == "Español"){
                    echo "selected";
                }
            ?>
            >Español</option>
            <option value="Inglés" 
            <?php
                if(isset($_SESSION["idioma"]) && $_SESSION["idioma"] == "Inglés"){
                    echo "selected";
                }
            ?>
            >Inglés</option>
        </select>
        <input type="color" name="color"  value="<?php echo isset($_SESSION["color"]) ? $_SESSION["color"] : ''; ?>">
        <input type="text" placeholder="Ciudad" name="ciudad"  value="<?php echo isset($_SESSION["ciudad"]) ? $_SESSION["ciudad"] : ''; ?>">
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>

<?php

    echo "<br>";

    if(isset($_POST["enviar"])){
        
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["idioma"] = $_POST["idioma"];
        $_SESSION["color"] = $_POST["color"];
        $_SESSION["ciudad"] = $_POST["ciudad"];

        setcookie('nombre', $_SESSION["nombre"], time()+3600);
        setcookie('idioma', $_SESSION["idioma"], time()+3600);
        setcookie('color', $_SESSION["color"], time()+3600);
        setcookie('ciudad', $_SESSION["ciudad"], time()+3600);
    }

?>

<?php

    echo "Nombre: " . $_SESSION["nombre"] . "<br>";
    echo "Idioma: " . $_SESSION["idioma"] . "<br>";
    echo "Color: " . "<div style='background-color:" .  $_SESSION['color'] . "; width: 20px; height: 20px;'></div>";
    echo "Ciudad: " . $_SESSION["ciudad"] . "<br>";

    echo "<br>";
    echo "Anterior: <br>";
    echo "Nombre: " . $_COOKIE["nombre"] . "<br>";
    echo "Idioma: " . $_COOKIE["idioma"] . "<br>";
    echo "Color: " . "<div style='background-color:" .  $_COOKIE['color'] . "; width: 20px; height: 20px;'></div>";
    echo "Ciudad: " . $_COOKIE["ciudad"] . "<br>";

?>