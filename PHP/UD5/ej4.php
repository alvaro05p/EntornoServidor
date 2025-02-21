<?php

    /**
     * @author Álvaro Pardo Peralta
    */

    if(isset($_GET["enviar"])){

        $horas = $_GET["horas"];
        
        if(ctype_digit($horas)){

            if($horas <= 40){
                $dinero = $horas * 12;
            }else{
                //Si las horas se pasan de las 40 las multiplicamos por 16
                $horasCaras = $horas - 40;
                $dinero = (40 * 12) + ($horasCaras * 16);
            }

            echo "Esta semana el salario es de $dinero €";
        
        }else{
        
            echo "Las horas deben ser un número";
        
        }

    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas extra</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <h1>Horas extra</h1>
   <form action="ej4.php">
        <input type="text" placeholder="horas" name="horas">
        <input type="submit" name="enviar">
   </form>
</body>
</html>