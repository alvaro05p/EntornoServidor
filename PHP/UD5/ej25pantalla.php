<?php
    $nombre = $_GET["nombre"];
    $pass = $_GET["pass"];
    $estudios = $_GET["estudios"];
    $nacionalidad = $_GET["nacionalidad"];
    $idiomas = $_GET["idiomas"];
    $email = $_GET["email"];
    
    $arrayIdiomas = [];
        
    $rand = random_int(1, 4);
    $clase = "";
    switch($rand){
        case 1:
            $clase = "1A";
            break;
        case 2:
            $clase = "1B";
            break;
        case 3:
            $clase = "1C";
            break;
        case 4:
            $clase = "1D";
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1><?php echo "Nombre: $nombre \n";?></h1>
    <br>
    <h1><?php echo "Contraseña: $pass \n";?></h1>
    <br>
    <h1><?php echo "Estudios: $estudios \n";?></h1>
    <br>
    <h1><?php echo "Nacionalidad: $nacionalidad \n";?></h1>
    <br>
    <h1><?php   echo "Idiomas:";  
                foreach($idiomas as $idioma){
                    echo "$idioma \n";
                } 
    ?></h1>
    <br>

</body>
</html>