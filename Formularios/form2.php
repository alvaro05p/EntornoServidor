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
        <input type="text" id="nombre" maxlength="50">

        <!--Apellidos con un maximo de 200 carácteres-->
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" maxlength="200">

        <!--Input email con longitud maxima de 250px-->
        <label for="email">Correo:</label>
        <input type="email" maxlength="250">

        <!--Username con un maximo de 5 carácteres-->
        <label for="user">Usuario:</label>
        <input type="text" id="user" maxlength="50">

        <!--Input type password para la contraseña con un maximo de 15 carácteres-->
        <label for="pass">Contraseña:</label>
        <input type="password" maxlength="15">

        <!--Input radio para elegir el sexo-->
        <label for="sexo">Sexo:</label>
        <p>
            <label for="sexo">Hombre</label>
            <input type="radio" id="sexo" name="sexo" value="Sexo" />
        
            <label for="sexo">Mujer</label>
            <input type="radio" id="sexo" name="sexo" value="Sexo" />
        </p>

        <!--Select con multiple size para que salgan varias a la vez-->
        <label for="situacion">Provincia</label>
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
            <input type="checkbox" checked>
            <label for="verif">Deseo recibir información sobre novedades y ofertas.</label>
        </div>
        
        <div>
            <input type="checkbox">
            <label for="verif">Declaro haber leído y aceptar las condiciones generales 
            del programa y la normativa sobre protección de datos.</label>
        </div>
        <input type="submit" value="Envío">

    </form>
</body>
</html>