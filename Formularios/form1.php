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
    <form action="form1.php" method="post">
        <!--Nombre con un maximo de 50 carácteres-->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" maxlength="50">

        <!--Apellidos con un maximo de 200 carácteres-->
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" maxlength="200">

        <!--Input radio para elegir el sexo-->
        <label for="sexo">Sexo:</label>
        <p>
            <label for="sexo">Hombre</label>
            <input type="radio" id="sexo" name="sexo" value="Sexo" />
        
            <label for="sexo">Mujer</label>
            <input type="radio" id="sexo" name="sexo" value="Sexo" />
        </p> 
       
        <!--Input email con longitud maxima de 250px-->
        <label for="email">Correo</label>
        <input type="email" maxlength="250">

        <!--Elemento select para elegir la provincia-->
        <label for="provincia">Provincia</label>
        <select name="provincia" id="provincia">
            <option value="alicante">Alicante</option>
            <option value="castellon">Castellón</option>
            <option value="valencia">Valencia</option>
        </select>

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