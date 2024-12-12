<?php

session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $modulo = $_POST["modulo"];
            $horas = $_POST["horas"];
            $curso = $_POST["curso"];

            if (!isset($_SESSION["schedule"])) {
                $_SESSION["schedule"] = []; // Inicializa el array si no existe
            }

            $_SESSION["schedule"][] = [
                "modulo" => $modulo,
                "horas" => $horas,
                "curso" => $curso
            ];

        }

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
    <form action="ej19.php" method="POST">
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
        <h2>Módulo:</h2>
        <select name="modulo">
            <option value="Listening">Listening</option>
            <option value="Writing">Writing</option>
            <option value="Speaking">Speaking</option>
        </select>
        <h2>Horas:</h2>
        <div>
            <label for="8h">08:00</label>
            <input type="checkbox" name="horas[]" value="8">
        </div>
        <div>
            <label for="9h">09:00</label>
            <input type="checkbox" name="horas[]" value="9">
        </div>
        <div>
            <label for="10h">10:00</label>
            <input type="checkbox" name="horas[]" value="10">
        </div>
        <div>
            <label for="11h">11:00</label>
            <input type="checkbox" name="horas[]" value="11">
        </div>
        <div>
            <label for="12h">12:00</label>
            <input type="checkbox" name="horas[]" value="12">
        </div>
        <div>
            <label for="13h">13:00</label>
            <input type="checkbox" name="horas[]" value="13">
        </div>
        <div>
            <label for="14h">14:00</label>
            <input type="checkbox" name="horas[]" value="14">
        </div>
        <input type="submit" value="Añadir">
    </form>

    <h2>Horario generado:</h2>

    <?php
    
        echo "<table>";
        echo "<tr>";
            echo "<td>";
                echo "Hora";
            echo "</td>";
            echo "<td>";
                echo "Asignatura";
            echo "</td>";
            echo "<td>";
                echo "Curso";
            echo "</td>";
        echo "</tr>";
        if (!empty($_SESSION["schedule"])) {
            foreach ($_SESSION["schedule"] as $entry) {
                for($i=8;$i<=14;$i++){
                    echo "<tr>";
                        echo "<td>";
                            echo $i . ":00";
                        echo"</td>";
                        if(in_array($i, $horas)){
                            echo "<td>$modulo</td>";
                            echo "<td>$curso</td>";
                        }else{
                            echo "<td>Descanso</td>";
                        }
                        
                    echo "</tr>";
                }
            }
        }
            echo "</table>";
    ?>
</body>
</html>