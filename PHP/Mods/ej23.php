<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="ej23.php">
        <fieldset>
            <legend>Datos personales</legend>
            <label for="estudios"><b>Estudios</b></label>
            <select name="estudios[]">
                <option value="ESO">ESO</option>
                <option value="Med">Bachiller / Grado Medio</option>
                <option value="Sup">Carrera / Grado Superior</option>
            </select>
            <label for="situacion"><b>Situación actual</b></label>
            <div>
                <label for="estudiando">Estudiando</label>
                <input type="checkbox" value="estudiando" name="hobbies">
            </div>
            <div>
                <label for="trabajando">Trabajando</label>
                <input type="checkbox" value="trabajando" name="hobbies">
            </div>
            <div>
                <label for="buscando">Buscando empleo</label>
                <input type="checkbox" value="buscando" name="hobbies">
            </div>
            <div>
                <label for="desempleado">Desempleado</label>
                <input type="checkbox" value="desempleado" name="hobbies">
            </div>
        </fieldset>
        <fieldset>
            <legend>Hobbies</legend>
            <select name="hobbie" multiple size="2">
                <option value="deporte">Deporte</option>
                <option value="musica">Música</option>
                <option value="lectura">Lectura</option>
                <input type="text" placeholder="otros" name="otros">
            </select>
        </fieldset>
        
    </form>
</body>
</html>