<?php
    if($_FILES["foto"]["error"] === UPLOAD_ERR_OK){
        $imagen = $_FILES["foto"]["tmp_name"];
        $ruta = "img";
        $ruta = "img/" . basename($_FILES["foto"]["name"]);
        move_uploaded_file($imagen, $ruta);
    }else{
        echo "Selecciona una imagen";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Rellena los datos</h1>
    <form action="ej25.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="password" name="pass" placeholder="Contraseña">
        <select name="estudios">
            <option value="Sin estudios">Sin estudios</option>
            <option value="ESO">ESO</option>
            <option value="Bachillerato">Bachillerato</option>
            <option value="FP">FP</option>
            <option value="Carrera">Carrera</option>
        </select>
        <h2>Nacionalidad:</h2>
        <div>
            <label for="nacionalidad1">Española:</label>
            <input type="radio" name="nacionalidad" value="Española" id="nacionalidad1">
        </div>
        <div>
            <label for="nacionalidad1">Otra:</label>
            <input type="radio" name="nacionalidad" value="Otra" id="nacionalidad2">
        </div>
        <h2>Idiomas:</h2>
        <div class="idiomas">
            <label>Español
                <input type="checkbox" name="idioma" value="Español">
            </label>
            <label>Inglés
                <input type="checkbox" name="idioma" value="Inglés">
            </label>
            <label>Francés
                <input type="checkbox" name="idioma" value="Francés">
            </label>
            <label>Alemán
                <input type="checkbox" name="idioma" value="Alemán">
            </label>
            <label>Italiano
                <input type="checkbox" name="idioma" value="Italiano">
            </label>
        </div>
        <input type="text" name="email" placeholder="email">
        <input type="file" name="foto">
        <input type="submit">
    </form>
</body>
</html>

