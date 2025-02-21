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
        $provincia = strtoupper($_GET['provincia']);
        $situacion = $_GET['situacion'];
        $comentario = $_GET['comentario'];
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
    echo "<b>Provincia:</b> $provincia<br>";

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

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos - Formulario de registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Alumnos - Formulario de registro</h1>
    <form action="form1.php" method="get">
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
            <input type="radio" name="sexo" value="hombre" />
        
            <label for="sexo">Mujer</label>
            <input type="radio" name="sexo" value="mujer" />
        </p>

        <!--Select con multiple size para que salgan varias a la vez-->
        <label for="provincia">Provincia</label>
        <select name="provincia" id="provincia" multiple size="2">
            <option value="valencia">Valencia</option>
            <option value="alicante">Alicante</option>
            <option value="castellon">Castellón</option>
            <option value="otro">Otro</option>
        </select>

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
        <input type="submit" value="Envío" name="enviar">
    </form>
</body>
</html>

