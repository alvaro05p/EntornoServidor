<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Generador de horario</h1>
    <form action="GET">
        <h2>Curso:</h2>
        <div>
            <label for="b1">Curso B1</label>
            <input type="radio" id="b1" name="curso" value="B1">
        </div>
        <div>
            <label for="b2">Curso B2</label>
            <input type="radio" id="b2" name="curso" value="B2">
        </div>
        <div>
            <label for="c1">Curso C1</label>
            <input type="radio" id="c1" name="curso" value="C1">
        </div>
        <h2>Módulos:</h2>
        <select name="modulos[]" multiple size=3>
            <option value="marketing">Marketing</option>
            <option value="design">Diseño</option>
            <option value="fol">FOL</option>
        </select>
        <h2>Horas:</h2>
        <div>
            <label for="8h">08:00</label>
            <input type="checkbox" name="8h">
        </div>
        <div>
            <label for="9h">09:00</label>
            <input type="checkbox" name="9h">
        </div>
        <div>
            <label for="10h">10:00</label>
            <input type="checkbox" name="10h">
        </div>
        <div>
            <label for="11h">11:00</label>
            <input type="checkbox" name="11h">
        </div>
        <div>
            <label for="12h">12:00</label>
            <input type="checkbox" name="12h">
        </div>
        <div>
            <label for="13h">13:00</label>
            <input type="checkbox" name="13h">
        </div>
        <div>
            <label for="14h">14:00</label>
            <input type="checkbox" name="14h">
        </div>
        <input type="submit" value="Generar">
    </form>
</body>
</html>