<?php
    session_start();
    
    if (!isset($_GET['token'])){
        echo "Token no seteado";
    }else if(hash_equals($_SESSION['token'], $_GET['token'])) {
        echo "Inicio de sesión exitoso.";
    }else{
        echo "Hash equals no funciona: " . $_SESSION['token'] ."----". $_GET["token"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION["rol"]?></title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body{
            margin: 10px;
            background-color: gray;
            color: white;
        }

    </style>

</head>
<body>

<?php
    //Pedir el numero de trabajadores si aún no tenemos nombres y salarios.
    if (!isset($_GET['nombres'])) {
        if (!isset($_GET['numTrabajadores'])) {
            // Mostrar el primer formulario para el nÃºmero de trabajadores
?>    
            <form action="ej1sindicalista.php" method="GET">
                <label for="numTrabajadores" class="form-label">Numero de trabajadores:</label>
                <input type="text" name="numTrabajadores" class="form-control">
            </form>
        
<?php

        }else{
            //Mostrar el formulario para nombres y salarios
            $numTrabajadores = $_GET['numTrabajadores'];
?>
            <form action="ej1sindicalista.php" method="GET">
<?php
                 for ($i = 1; $i <= $numTrabajadores; $i++): ?>
                    <h4>Trabajador <?php echo $i; ?></h4>
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombres[]" class="form-control">
                    <label for="salario" class="form-label">Salario:</label>
                    <input type="text" name="salarios[]" class="form-control">
                <?php endfor; ?>

                <!-- SelecciÃ³n de las estadÃ­sticas a mostrar -->
                <br>
                <br>
                <label for="estadisticas" class="form-label">Seleccionar estadÃ­sticas:</label>
                <select name="estadisticas[]" class="form-select" multiple required size="2">
                    <option value="medio">Salario medio</option>
                </select><br><br>

                <input type="submit" value="Calcular">
            </form>
<?php

        }
    
    } else {
        //Calcular el salario mÃ¡ximo, mÃ­nimo y medio
        $nombres = $_GET['nombres'];
        $salarios = $_GET['salarios'];
        $estadisticasSeleccionadas = $_GET['estadisticas'];
        
        // Crear un array asociativo con nombres y salarios
        $trabajadores = array_combine($nombres, $salarios);
    
        // Funciones para calcular el salario mÃ¡ximo, mÃ­nimo y medio
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
        // Mostrar solo las estadÃ­sticas seleccionadas
        if (in_array('maximo', $estadisticasSeleccionadas)) {
            echo "Salario mÃ¡ximo: " . salarioMaximo($salarios) . "<br>";
        }
        if (in_array('minimo', $estadisticasSeleccionadas)) {
            echo "Salario mÃ­nimo: " . salarioMinimo($salarios) . "<br>";
        }
        if (in_array('medio', $estadisticasSeleccionadas)) {
            echo "Salario medio: " . salarioMedio($salarios) . "<br>";
        }
    }
?>

       
    
</body>
</html>