<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos - Formulario de registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Alumnos - Formulario de registro</h1>
    <form action="form2.php" method="get">
        <!--Nombre con un maximo de 50 carácteres-->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" maxlength="50">

        <!--Apellidos con un maximo de 200 carácteres-->
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" maxlength="200">

        <!--Input email con longitud maxima de 250px-->
        <label for="email">Correo:</label>
        <input type="text" name="correo" maxlength="250">

        <!--Username con un maximo de 5 carácteres-->
        <label for="user">Usuario:</label>
        <input type="text" id="user" name="user" maxlength="50">

        <!--Input type password para la contraseña con un maximo de 15 carácteres-->
        <label for="pass">Contraseña:</label>
        <input type="password" name="password" maxlength="15">

        <!--Input radio para elegir el sexo-->
        <label for="sexo">Sexo:</label>
        <p>
            <label for="sexo">Hombre</label>
            <input type="radio" id="sexo" name="sexo" value="Sexo" />
        
            <label for="sexo">Mujer</label>
            <input type="radio" id="sexo" name="sexo" value="Sexo" />
        </p>

        <!--Select con multiple size para que salgan varias a la vez-->
        <label for="provincia">Provincia</label>
        <select name="provincia" id="provincia" multiple size="2">
            <option value="valencia">Valencia</option>
            <option value="alicante">Alicante</option>
            <option value="castellon">Castellón</option>
            <option value="otro">Otro</option>
        </select>

        <!--Select con multiple size para que salgan varias a la vez-->
        <label for="situacion">Situación</label>
        <select name="situacion" id="situacion" multiple size="2">
            <option value="estudiando">Estudiando</option>
            <option value="trabajando">Trabajando</option>
            <option value="buscandoEmpleo">Buscando empleo</option>
            <option value="otro">Otro</option>
        </select>

        <label for="comentario">Comentario</label>
        <textarea id="comentario" rows="6" cols="60"></textarea>

        <!--Checkbox con el atributo checked para que salga pulsado por defecto-->
        <div>
            <input type="checkbox" name="info" checked>
            <label for="verif">Deseo recibir información sobre novedades y ofertas.</label>
        </div>
        
        <div>
            <input type="checkbox" name="condiciones">
            <label for="verif">Declaro haber leído y aceptar las condiciones generales 
            del programa y la normativa sobre protección de datos.</label>
        </div>
        <input type="submit" value="Envío">

    </form>
</body>
</html>

<?php

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
    $comentario = strtoupper($_GET['comentario']);
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
echo "<b>Descripción de la incidencia:</b> $comentario<br>";

//Si el horario no está vacío usamos implode para unir los elementos con un "-"
if (!empty($horario)) {
    echo "<b>Horario de contacto:</b> " . strtoupper(implode(" – ", $horario)) . "<br>";
} else {
    echo "<b>Horario de contacto:</b> No seleccionado<br>";
}

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

?>