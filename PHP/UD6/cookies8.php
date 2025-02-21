<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="cookies8.php" method="GET">
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

<?php
    $entrada = $_GET["entrada"];
    $calculos = $_GET["calculos"];
    $nums = explode(" ", $entrada);

    setcookie('entrada', strval($entrada), time()+3600);

    if(in_array("media", $calculos)){
        $total = 0;
        foreach($nums as $num){
            $total += $num;
        }
        $media = $total / count($nums);
        
        echo $media;

        setcookie('resultado', strval($media), time()+3600);
        setcookie('calculo', "media", time()+3600);
    }

    if(in_array("moda", $calculos)){
        $contados = array_count_values($nums);
        $max = max($contados);
        foreach($contados as $valor => $frecuencia){
            if($frecuencia == $max && $frecuencia > 1){
                echo $valor;
                setcookie('resultado', strval($valor), time()+3600);
                setcookie('calculo', "moda", time()+3600);
            }
        }
    }

    if(in_array("mediana", $calculos)){
        
        $lenght = count($nums);
        if($lenght % 2 == 0){
            sort($nums);
            $mediana = $nums[$lenght/2] + $nums[$lenght/2+1];
        }else{
            $mediana = $nums[floor($lenght/2)];
        }

        echo $mediana;
        setcookie('resultado', strval($mediana), time()+3600);
        setcookie('calculo', "mediana", time()+3600);
    }

    echo "<br>";
    echo "Anterior: ";
    echo "<br>";
    echo "Calcular " . $_COOKIE["calculo"] . " de " . $_COOKIE["entrada"] . " = " .$_COOKIE["resultado"];


?>