<?php

if (isset($_GET['enviar'])) {

    //Recogemos los datos del formulario con el método get
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nombre = strtoupper($_GET['nombre']);
        $apellidos = strtoupper($_GET['apellidos']);
        $email = strtoupper($_GET['email']);
        $user = strtoupper($_GET['user']);
        $pass = strtoupper($_GET['pass']);
        $sexo = strtoupper($_GET['sexo']);
        $horario = $_GET['horario'];
        $conocido = isset($_GET['conocido']) ? $_GET['conocido'] : [];
        $comentario = strtoupper($_GET['comentario']);
    }

    if (empty($nombre) || empty($apellidos) || empty($email) || empty($user) || empty($pass)) {
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
    echo "<b>Comentario:</b> $comentario<br>";

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

    // Verificamos si las casillas están pulsadas en los checkbox mediante isset
    if (isset($_GET['info'])) {
        echo "<b>Recibir ofertas:</b> Ha seleccionado recibir ofertas<br>";
    } else {
        echo "<b>Recibir ofertas:</b> No ha seleccionado recibir ofertas<br>";
    }

    if (isset($_GET['condiciones'])) {
        echo "<b>Condiciones aceptadas:</b> Ha aceptado las condiciones<br>";
    } else {
        echo "<b>Condiciones aceptadas:</b> No aceptadas<br>";
    }

    echo "<h2>Debes rellenar todos los campos</h2>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos - Formulario de registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Alumnos - Formulario de registro 3</h1>
    <form action="form3.php" method="get">
        <!--Nombre con un maximo de 50 carácteres-->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" maxlength="50">

        <!--Apellidos con un maximo de 200 carácteres-->
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" maxlength="200">

        <!--Input email con longitud maxima de 250px-->
        <label for="email">Correo:</label>
        <input type="text" name="email" maxlength="250">

        <!--Username con un maximo de 5 carácteres-->
        <label for="user">Usuario:</label>
        <input type="text" id="user" name="user" maxlength="50">

        <!--Input type password para la contraseña con un maximo de 15 carácteres-->
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" maxlength="15">

        <!--Input radio para elegir el sexo-->
        <label for="sexo">Sexo:</label>
        <p>
            <label for="sexo">Hombre</label>
            <input type="radio" id="sexo" name="sexo" value="Sexo" />
        
            <label for="sexo">Mujer</label>
            <input type="radio" id="sexo" name="sexo" value="Sexo" />
        </p>

        <!--Select de los horarios en el que se pueden ver 3 a la vez-->
        <label for="horario">Horario de contacto:</label>
        <select name="horario[]" id="horario" multiple size="3">
            <option value="8-14">De 8 a 14 horas</option>
            <option value="14-18">De 14 a 18 horas</option>
            <option value="18-21">De 18 a 21 horas</option>
        </select>

        <label for="conocido">Como nos has conocido</label>
        <div>
        <input type="checkbox" id="amigo" name="conocido[]" value="amigo">
            <label for="amigo">Amigo</label>

            <input type="checkbox" id="web" name="conocido[]" value="web">
            <label for="web">Web</label>

            <input type="checkbox" id="prensa" name="conocido[]" value="prensa">
            <label for="prensa">Prensa</label>

            <input type="checkbox" id="otros" name="conocido[]" value="otros">
            <label for="otros">Otros</label>
        </div>

        <label for="comentario">Comentario</label>
        <textarea id="comentario" name="comentario" rows="6" cols="60"></textarea>

        <!--Checkbox con el atributo checked para que salga pulsado por defecto-->
        <div>
            <input type="checkbox" name="info" checked>
            <label for="info">Deseo recibir información sobre novedades y ofertas.</label>
        </div>
        
        <div>
            <input type="checkbox" name="condiciones">
            <label for="condiciones">Declaro haber leído y aceptar las condiciones generales 
            del programa y la normativa sobre protección de datos.</label>
        </div>
        <p>
            <input type="submit" value="Envío" name="enviar">
            <input type="reset" value="Borrar">
        </p>
        

    </form>
</body>
</html>

