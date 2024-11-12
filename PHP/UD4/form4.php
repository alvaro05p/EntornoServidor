<?php

// Verificamos si el botón "enviar" se ha pulsado
if (isset($_GET['enviar'])) {
    //Recogemos los datos del formulario con el método get
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nombre = strtoupper($_GET['nombre']);
        $apellidos = strtoupper($_GET['apellidos']);
        $email = strtoupper($_GET['email']);
        $user = strtoupper($_GET['user']);
        $pass = strtoupper($_GET['pass']);
        $sexo = strtoupper($_GET['sexo']);
        $provincia = strtoupper($_GET['provincia']);
        $horario = $_GET['horario'];
        $conocido = $_GET['conocido'];
        $incidencia = strtoupper($_GET['incidencia']);
        $comentario = strtoupper($_GET['comentario']);
    }

    if (empty($nombre) || empty($apellidos) || empty($email) || empty($user) || empty($pass) || empty($provincia) || empty($incidencia) || empty($comentario) || empty($horario)) {
        echo "Por favor, complete todos los campos.<br>";
        exit; 
    }

    //Mostramos los datos que no requieren más código que un echo
    echo "<h2>Datos del formulario:</h2>";
    echo "<b>Nombre:</b> $nombre<br>";
    echo "<b>Apellidos:</b> $apellidos<br>";
    echo "<b>Email:</b> $email<br>";
    echo "<b>Usuario:</b> $user<br>";
    echo "<b>Contraseña:</b> $pass<br>";
    echo "<b>Sexo:</b> $sexo<br>";
    echo "<b>Provincia:</b> $provincia<br>";
    echo "<b>Tipo de incidencia:</b> $incidencia<br>";
    echo "<b>Descripción de la incidencia:</b> $comentario<br>";

    //Si el horario no está vacío usamos implode para unir los elementos con un "-"
    if (!empty($horario)) {
        echo "<b>Horario de contacto:</b> " . strtoupper(implode(" – ", $horario)) . "<br>";
    } else {
        echo "<b>Horario de contacto:</b> No seleccionado<br>";
    }

    // Mostrar el resultado de los checkbox, comprobamos si cierto valor está con in_array
    echo "<b>¿Cómo nos ha conocido?</b> ";
    if (in_array('amigo', $conocido)) {
        echo "Amigo ";
    }
    if (in_array('web', $conocido)) {
        echo "Web ";
    }
    if (in_array('prensa', $conocido)) {
        echo "Prensa ";
    }
    if (in_array('otros', $conocido)) {
        echo "Otros ";
    }
    echo "<br>";
            
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno - Formulario de registro 4</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Alumno - Formulario de registro 4</h1>
    <form action="form4.php" method="GET">

        <fieldset>

            <legend>Datos personales</legend>

            <!--Nombre con un maximo de 50 carácteres-->
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" maxlength="50" placeholder="Introduce tu nombre">

            <!--Apellidos con un maximo de 200 carácteres-->
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" maxlength="200" placeholder="Introduce tus apellidos">

            <!--Input email con longitud maxima de 250px-->
            <label for="email">Correo:</label>
            <input type="text" id="email" name="email" maxlength="250" placeholder="Introduce tu correo electrónico">

            <!--Username con un maximo de 5 carácteres-->
            <label for="user">Usuario:</label>
            <input type="text" id="user" name="user" maxlength="5" placeholder="Introduce tu nombre de usuario">

            <!--Input type password para la contraseña con un maximo de 15 carácteres-->
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" maxlength="15" placeholder="Introduce tu contraseña">
            <br>
            <!--Input radio para elegir el sexo. Hombre por defecto-->
            <label for="sexo">Sexo:</label>
            <p>
                <label for="hombre">Hombre</label>
                <input type="radio" id="hombre" name="sexo" value="Hombre" checked>
            
                <label for="mujer">Mujer</label>
                <input type="radio" id="mujer" name="sexo" value="Mujer">
            </p>

        </fieldset>

        <fieldset>

            <legend>Datos de contacto</legend>

            <!--Provincia, select con valores Alicante, Castellón y Valencia-->
            <label for="provincia">Provincia:</label>
            <select name="provincia" id="provincia">
                <option value="Alicante">Alicante</option>
                <option value="Castellón">Castellón</option>
                <option value="Valencia">Valencia</option>
            </select>

            <!--Select de los horarios en el que se pueden ver 3 a la vez-->
            <label for="horario">Horario de contacto:</label>
            <select name="horario[]" id="horario" multiple size="3">
                <option value="8-14">De 8 a 14 horas</option>
                <option value="14-18">De 14 a 18 horas</option>
                <option value="18-21">De 18 a 21 horas</option>
            </select>

            <label for="conocido">¿Cómo nos ha conocido?</label>
            <div>
                <input type="checkbox" name="conocido[]" id="amigo" value="amigo">
                <label for="amigo">Un amigo</label>
                
                <input type="checkbox" name="conocido[]" id="web" value="web">
                <label for="web">Web</label>
                
                <input type="checkbox" name="conocido[]" id="prensa" value="prensa">
                <label for="prensa">Prensa</label>
                
                <input type="checkbox" name="conocido[]" id="otros" value="otros">
                <label for="otros">Otros</label>
            </div>

            </fieldset>

        <fieldset>
            <legend>Datos de la incidencia</legend>

            <!--Select para los tipos de incidencia-->
            <label for="incidencia">Tipo de incidencia:</label>
            <select name="incidencia" id="incidencia">
                <option value="fijo">Teléfono fijo</option>
                <option value="movil">Teléfono móvil</option>
                <option value="internet">Internet</option>
                <option value="television">Televisión</option>
            </select>

            <!--Descripción de la incidencia con textarea 4x40-->
            <label for="comentario">Descripción de la incidencia:</label>
            <textarea id="comentario" name="comentario" rows="4" cols="40" placeholder="Describe la incidencia"></textarea>

        </fieldset>
        
        <!--Botones-->
        <p>
            <input type="submit" value="Enviar" name="enviar">
            <input type="reset" value="Borrar">
        </p>
    </form>
</body>
</html>

