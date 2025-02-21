<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="cookies2main.php">
        <input type="text" name="nombre" placeholder="nombre" value="<?php echo isset($_COOKIE["nombre"]) ? $_COOKIE["nombre"] : ''; ?>">
        <select name="idioma">
            <option value="Español" 
            <?php
                if(isset($_COOKIE["idioma"]) && $_COOKIE["idioma"] == "Español"){
                    echo "selected";
                }
            ?>
            >Español</option>
            <option value="Inglés" 
            <?php
                if(isset($_COOKIE["idioma"]) && $_COOKIE["idioma"] == "Inglés"){
                    echo "selected";
                }
            ?>
            >Inglés</option>
        </select>
        <input type="color" name="color"  value="<?php echo isset($_COOKIE["color"]) ? $_COOKIE["color"] : ''; ?>">
        <input type="text" placeholder="Ciudad" name="ciudad"  value="<?php echo isset($_COOKIE["ciudad"]) ? $_COOKIE["ciudad"] : ''; ?>">
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>

<?php

    echo "<br>";

    if(isset($_POST["enviar"])){
        
        $nombre = $_POST["nombre"];
        $idioma = $_POST["idioma"];
        $color = $_POST["color"];
        $ciudad = $_POST["ciudad"];

        setcookie('nombre', $nombre, time()+3600);
        setcookie('idioma', $idioma, time()+3600);
        setcookie('color', $color, time()+3600);
        setcookie('ciudad', $ciudad, time()+3600);
    }

?>

<?php

    echo "Nombre: " . $_POST["nombre"] . "<br>";
    echo "Idioma: " . $_POST["idioma"] . "<br>";
    echo "Color: " . "<div style='background-color:" .  $_POST['color'] . "; width: 20px; height: 20px;'></div>";
    echo "Ciudad: " . $_POST["ciudad"] . "<br>";

?>