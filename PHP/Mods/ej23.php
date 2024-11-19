<?php
session_start();
    $mostrar = true;
    if(isset($_POST["enviar"])){
        if(empty($_POST["estudios"])){
            echo "Selecciona un nivel de estudios";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["situacion"])){
            echo "Indique su situación actual";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["hobbie"]) && empty($_POST["otros"])){
            echo "Seleccione algún hobbie";
            echo "<br>";
            $mostrar = false;
        }

        if($mostrar){
            $_SESSION["estudios"]=$_POST["estudios"];
            $_SESSION["situacion"]=$_POST["situacion"];
            $_SESSION["hobbie"]=$_POST["hobbie"];
            $_SESSION["otros"]=$_POST["otros"];
            header("Location: ej23pantalla.php");
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="ej23.php" method="POST">
        <fieldset>
            <legend>Datos personales</legend>
            <label for="estudios"><b>Estudios</b></label>
            <select name="estudios">
                <option value="">Seleccionar</option>
                <option value="ESO">ESO</option>
                <option value="Grado Medio">Bachiller / Grado Medio</option>
                <option value="Grado Superior">Carrera / Grado Superior</option>
            </select>
            <label for="situacion[]"><b>Situación actual</b></label>
            <div>
                <label for="estudiando">Estudiando</label>
                <input type="checkbox" value="Estudiando" name="situacion[]">
            </div>
            <div>
                <label for="trabajando">Trabajando</label>
                <input type="checkbox" value="Trabajando" name="situacion[]">
            </div>
            <div>
                <label for="buscando">Buscando empleo</label>
                <input type="checkbox" value="Buscando empleo" name="situacion[]">
            </div>
            <div>
                <label for="desempleado">Desempleado</label>
                <input type="checkbox" value="Desempleado" name="situacion[]">
            </div>
        </fieldset>
        <fieldset>
            <legend>Hobbies</legend>
            <select name="hobbie[]" multiple size="2">
                <option value="Deporte">Deporte</option>
                <option value="Musica">Música</option>
                <option value="Lectura">Lectura</option>
                <input type="text" placeholder="otros" name="otros">
            </select>
        </fieldset>
        <input type="submit" name="enviar">
    </form>
</body>
</html>