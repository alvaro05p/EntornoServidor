<?php
    $nombre = $_GET["nombre"];
    $pass = $_GET["pass"];
    $estudios = $_GET["estudios"];
    $nacionalidad = $_GET["nacionalidad"];
    $idiomas = $_GET["idiomas"];
    $email = $_GET["email"];
    $foto = $_GET["foto"];
    
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

    if(isset($_GET["volver"])){
        header("Location: ej25.php");
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
    <li><?php echo "Nombre: $nombre \n";?></li>
    <br>
    <li><?php echo "Contraseña: $pass \n";?></li>
    <br>
    <li><?php echo "Estudios: $estudios \n";?></li>
    <br>
    <li><?php echo "Nacionalidad: $nacionalidad \n";?></li>
    <br>
    <li><?php   echo "Idiomas:";  
                foreach($idiomas as $idioma){
                    echo "$idioma \n";
                } 
    ?></li>
    <br>

    <img src="<?php echo $foto ?>" alt="foto de perfil" style='max-width: 200px; height: auto;'>
    <h3><?php echo $foto ?></h3>
    <form action="ej25.php" method="POST">
        <input type="submit" value="Volver" name="volver"> 
    </form>
    
</body>
</html>