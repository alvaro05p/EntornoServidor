<?php

    if(isset($_POST["enviar"])){

        $usuario = $_POST["usuario"];
        $saludo = $_POST["saludo"];

        setcookie('usuario', $usuario, time()+3600);
        setcookie('saludo', $saludo, time()+3600);

        header("Location: cookies1.php");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="usuario" placeholder="Usuario">
        <select name="saludo">
            <option value="saludo">Saludo</option>
            <option value="despedida">Despedida</option>
        </select>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>