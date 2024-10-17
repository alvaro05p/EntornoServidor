<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos - Formulario de registro.</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="form1.php">
        <!--Nombre con un maximo de 50 carácteres-->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" maxlength="50">

        <!--Apellidos con un maximo de 200 carácteres-->
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" maxlength="200">

        <label for="sexo">Sexo:</label>
        
        <p>
            <label for="sexo">Hombre</label>
            <input type="radio" id="sexo" name="sexo" value="Sexo" />
        
            <label for="sexo">Mujer</label>
            <input type="radio" id="sexo" name="sexo" value="Sexo" />
        </p> 
       
        
        <label for="email">Correo</label>
        <input type="text" maxlength="250">

        <label for="provincia">Provincia</label>
        <select name="provincia" id="provincia">
            <option value="alicante">Alicante</option>
            <option value="castellon">Castellón</option>
            <option value="valencia">Valencia</option>
        </select>

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