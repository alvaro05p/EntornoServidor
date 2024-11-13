<?php
    $entrada = $_GET["entrada"];
    $calculos = $_GET["calculos"];
    $nums = explode(" ", $entrada);
    if(in_array("media", $calculos)){
        $total = 0;
        foreach($nums as $num){
            $total += $num;
        }
        $media = $total / count($nums);
        
        echo $media;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="ej18.php" method="GET">
        <input type="text" placeholder="1 5 2 6 34" name="entrada">
        <select name="calculos[]" multiple size=3>
            <option value="media">Media</option>
            <option value="moda">Moda</option>
            <option value="mediana">Mediana</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>