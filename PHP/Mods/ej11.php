<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej11</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
    //Pedir el número de trabajadores si aún no tenemos nombres y salarios.
    if (!isset($_GET['nombres'])) {
        if (!isset($_GET['numTrabajadores'])) {
            // Mostrar el primer formulario para el número de trabajadores
?>    
            <form action="ej11.php" method="GET">
                <label for="numTrabajadores">Numero de trabajadores:</label>
                <input type="text" name="numTrabajadores">
            </form>
        
<?php

        }else{
            //Mostrar el formulario para nombres y salarios
            $numTrabajadores = $_GET['numTrabajadores'];
?>
            <form action="ej11.php" method="GET">
<?php
                 for ($i = 1; $i <= $numTrabajadores; $i++): ?>
                    <h4>Trabajador <?php echo $i; ?></h4>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombres[]">
                    <label for="salario">Salario:</label>
                    <input type="text" name="salarios[]">
                <?php endfor; ?>

                <!-- Selección de las estadísticas a mostrar -->
                <label for="porcentaje">Porcentaje de aumento:</label>
                <input type="text" name="porcentaje">

                <input type="submit" value="Calcular">
            </form>
<?php

        }
    
    } else {

        //Calcular el salario máximo, mínimo y medio
        $nombres = $_GET['nombres'];
        $salarios = $_GET['salarios'];
        $porcentaje = $_GET['porcentaje'];
        $errores;
        
        foreach($salarios as $nombre => $salario){
            if (!is_numeric($salario) || !is_numeric($porcentaje)) {
                $errores = "Los salarios y el porcentaje deben ser carácteres numéricos";
            }
        }

        if(empty($errores)){
            // La función array_combine crea un array asociativo a partir de 2 arrays
            $trabajadores = array_combine($nombres, $salarios);
        
            // Funciones para calcular el salario máximo, mínimo y medio
            function salariosSubidos($trabajadores, $porcentaje){
                // El & hace que se modifique el valor original, no solo dentro del bucle
                foreach ($trabajadores as $nombre => &$salario){
                    echo "Salario original de $nombre: $salario";
                    echo "<br>";
                    $salario += $salario * ($porcentaje / 100);
                    echo "Salario + $porcentaje%: $salario";
                    echo "<br>";
                }

                //La funcion unset hace que no nos quedemos con el valor del &
                unset($salario);
                return $trabajadores;
            }
        
            // Mostrar los resultados
            echo "<h3>Resultados:</h3>";
            salariosSubidos($trabajadores,$porcentaje);
        }else{
            echo $errores;
        }

    }
?>

</body>
</html>