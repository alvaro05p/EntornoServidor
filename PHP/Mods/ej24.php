<?php
session_start();
    $mostrar = true;
    if(isset($_POST["enviar"])){
        if(empty($_POST["nombre"])){
            echo "Indica tu nombre";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["apellidos"])){
            echo "Indica tus apellidos";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["edad"]) || !is_numeric($_POST["edad"])){
            echo "Indica tu edad (numero)";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["peso"]) || $_POST["peso"] < 10 || $_POST["peso"] > 150){
            echo "Indica tu peso, entre 10 y 150";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["sexo"])){
            echo "Indica tu sexo";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["estadoCivil"])){
            echo "Indica tu estado civil";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["hobbies"])){
            echo "Indica tus hobbies";
            echo "<br>";
            $mostrar = false;
        }
        

        if($mostrar){
            $_SESSION["nombre"]=$_POST["nombre"];
            $_SESSION["apellidos"]=$_POST["apellidos"];
            $_SESSION["edad"]=$_POST["edad"];
            $_SESSION["peso"]=$_POST["peso"];
            $_SESSION["sexo"]=$_POST["sexo"];
            $_SESSION["estadoCivil"]=$_POST["estadoCivil"];
            $_SESSION["hobbies"]=$_POST["hobbies"];
            header("Location: ej24pantalla.php");
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentación</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="ej24.php" method="POST">
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Apellidos" name="apellidos">
        <input type="text" placeholder="Edad" name="edad">
        <input type="text" placeholder="Peso" name="peso">
        <label for="sexo">Sexo:</label>
        <select name="sexo">
            <option value="">--Seleccionar--</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>
        <label for="estadoCivil">Estado Civil:</label>
        <select name="estadoCivil">
        <option value="">--Seleccionar--</option>
            <option value="Soltero">Soltero</option>
            <option value="Casado">Casado</option>
            <option value="Viudo">Viudo</option>
            <option value="Divorciado">Divorciado</option>
            <option value="Otro">Otro</option>
        </select>
        <label for="hobbies">Hobbies:</label>
        <select name="hobbies[]" multiple>
            <option value="Cine">Cine</option>
            <option value="Deporte">Deporte</option>
            <option value="Literatura">Literatura</option>
            <option value="Música">Música</option>
            <option value="Cómics">Cómics</option>
            <option value="Series">Series</option>
            <option value="Videojuegos">Videojuegos</option>
        </select>
        
        <input type="submit" name="enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>