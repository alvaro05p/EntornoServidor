<?php
session_start();
$nombre = $_SESSION["nombre"];
$imagen = "img/" . $_SESSION["foto"];
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
    <title>Curso</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1><?php echo $nombre; ?></h1>
    <img src="<?php echo $imagen; ?>" alt="Alumno" style="width: 200px;">
    <h2><?php echo $clase; ?></h2>
</body>
</html>