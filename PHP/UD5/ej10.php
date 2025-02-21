<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej10</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
    //Pedir el número de trabajadores si aún no tenemos nombres y salarios.
    if (!isset($_GET['nombres'])) {
        if (!isset($_GET['numTrabajadores'])) {
            // Mostrar el primer formulario para el número de trabajadores
?>    
            <form action="ej10.php" method="GET">
                <label for="numTrabajadores">Numero de trabajadores:</label>
                <input type="text" name="numTrabajadores">
            </form>
        
<?php

        }else{
            //Mostrar el formulario para nombres y salarios
            $numTrabajadores = $_GET['numTrabajadores'];
?>
            <form action="ej10.php" method="GET">
<?php
                 for ($i = 1; $i <= $numTrabajadores; $i++): ?>
                    <h4>Trabajador <?php echo $i; ?></h4>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombres[]">
                    <label for="salario">Salario:</label>
                    <input type="text" name="salarios[]">
                <?php endfor; ?>

                <!-- Selección de las estadísticas a mostrar -->
                <label for="estadisticas">Seleccionar estadísticas:</label>
                <select name="estadisticas[]" multiple required>
                    <option value="maximo">Salario máximo</option>
                    <option value="minimo">Salario mínimo</option>
                    <option value="medio">Salario medio</option>
                </select><br><br>

                <input type="submit" value="Calcular">
            </form>
<?php

        }
    
    } else {
        //Calcular el salario máximo, mínimo y medio
        $nombres = $_GET['nombres'];
        $salarios = $_GET['salarios'];
        $estadisticasSeleccionadas = $_GET['estadisticas'];
        
        // Crear un array asociativo con nombres y salarios
        $trabajadores = array_combine($nombres, $salarios);
    
        // Funciones para calcular el salario máximo, mínimo y medio
        function salarioMaximo($salarios) {
            return max($salarios);
        }
    
        function salarioMinimo($salarios) {
            return min($salarios);
        }
    
        function salarioMedio($salarios) {
            return array_sum($salarios) / count($salarios);
        }
    
        // Mostrar los resultados
        echo "<h3>Resultados:</h3>";
        // Mostrar solo las estadísticas seleccionadas
        if (in_array('maximo', $estadisticasSeleccionadas)) {
            echo "Salario máximo: " . salarioMaximo($salarios) . "<br>";
        }
        if (in_array('minimo', $estadisticasSeleccionadas)) {
            echo "Salario mínimo: " . salarioMinimo($salarios) . "<br>";
        }
        if (in_array('medio', $estadisticasSeleccionadas)) {
            echo "Salario medio: " . salarioMedio($salarios) . "<br>";
        }
    }
?>

       
    
</body>
</html>