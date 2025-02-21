<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Horaria</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Zonas horarias</h1>
    <form action="ej21.php" method="GET">
        <label for="zona">Elige una zona horaria</label>
        <select name="zona" id="zona">
            <option value="-12">UTC-12:00 (Baker Island)</option>
            <option value="-11">UTC-11:00 (Samoa Americana, Niue)</option>
            <option value="-10">UTC-10:00 (Hawái, Polinesia Francesa)</option>
            <option value="-9.5">UTC-09:30 (Islas Marquesas)</option>
            <option value="-9">UTC-09:00 (Alaska)</option>
            <option value="-8">UTC-08:00 (Hora del Pacífico, Los Ángeles, Vancouver)</option>
            <option value="-7">UTC-07:00 (Hora de las Montañas, Denver, Calgary)</option>
            <option value="-6">UTC-06:00 (Hora Central, Ciudad de México, Chicago)</option>
            <option value="-5">UTC-05:00 (Hora del Este, Nueva York, Lima, Bogotá)</option>
            <option value="-4">UTC-04:00 (Caracas, Puerto Rico, La Paz)</option>
            <option value="-3">UTC-03:00 (Buenos Aires, Montevideo, Brasilia)</option>
            <option value="-2">UTC-02:00 (Islas Georgias del Sur y Sandwich del Sur)</option>
            <option value="-1">UTC-01:00 (Azores, Cabo Verde)</option>
            <option value="0">UTC±00:00 (Londres, Lisboa, Casablanca)</option>
            <option value="+1">UTC+01:00 (Madrid, París, Berlín, Roma)</option>
            <option value="+2">UTC+02:00 (Atenas, Sudáfrica, Jerusalén)</option>
            <option value="+3">UTC+03:00 (Moscú, Nairobi, Estambul)</option>
            <option value="+3.5">UTC+03:30 (Teherán)</option>
            <option value="+4">UTC+04:00 (Dubái, Bakú)</option>
            <option value="+4.5">UTC+04:30 (Kabul)</option>
        </select>
        <input type="submit" value="calcular">
    </form>
</body>
</html>

<?php
    $hora = date("H");
    $zona = $_GET["zona"];
    $hora += $zona;
    if($hora > 23){
        $hora - 24;
    }else if($hora < 0){
        $hora + 24;
    }
    echo $hora . date(":i:s");
    
?>