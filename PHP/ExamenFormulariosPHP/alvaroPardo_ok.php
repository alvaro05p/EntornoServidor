<?php

$nombre = $_GET["nombre"];
$pass = $_GET["pass"];
$usuario = $_GET["usuario"];
$email = $_GET["email"];
$tipo = $_GET["tipo"];
$poblacion = $_GET["poblacion"];
$elementos = $_GET["elementos"];
$necesidades = $_GET["necesidades"];
$foto = $_GET["foto"];

echo "<h3>Datos personales:</h3>";

echo "<ul>";
echo "<li style='color:blue'><b>NOMBRE: </b>" . $nombre;
echo "<li style='color:blue'><b>PASS: </b>" . $pass;
echo "<li style='color:blue'><b>Usuario: </b>" . $usuario;
echo "<li style='color:blue'><b>Email: </b>" . $email;
echo "<li style='color:blue'><b>Tipo: </b>" . $tipo;
echo "<li style='color:blue'><b>Población:</b> " . $poblacion;
echo "</ul>";
echo "<h3>Elementos:</h3>";
    echo"<ul>";
    foreach($elementos as $elemento){
        echo "<li style='color:blue'; >$elemento</li>"; 
    }
    echo "</ul>";
    echo "<h3>Necesidades:</h3>";
    echo"<ul>"; 
    foreach($necesidades as $necesidad){
        echo "<li style='color:blue';>$necesidad</li>"; 
    }
    echo "</ul>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php echo $foto ?>" alt="foto de perfil" style='max-width: 200px; height: auto;'>
</body>
</html>