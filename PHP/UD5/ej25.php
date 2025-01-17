<?php
    
    $mostrar = true;
    if(isset($_POST["validar"])){
        $nombre = $_POST["nombre"];

        if(empty($_POST["nombre"])){
            echo "Indica tu nombre";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["pass"])){
            echo "Introduce una contraseña";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["estudios"])){
            echo "Indica tu nivel de estudios";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["nacionalidad"])){
            echo "Selecciona una nacionalidad";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["idiomas"])){
            echo "Selecciona mínimo un idioma";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($_POST["email"])){
            echo "Introduce tu e-mail";
            echo "<br>";
            $mostrar = false;
        }
        if($_FILES["foto"]["error"] === UPLOAD_ERR_OK){
            $imagen = $_FILES["foto"]["tmp_name"];
            $ruta = "img";
            $ruta = "img/" . basename($_FILES["foto"]["name"]);
            move_uploaded_file($imagen, $ruta);
        }else{
            echo "Selecciona una imagen";
            $mostrar = false;
        }
        
        

    }
?>

<?php
    if($mostrar && isset($_POST["enviar"])){
        header("Location: ej25pantalla.php?nombre=" . urlencode($_POST['nombre'] . "&pass=" . urlencode($_POST['pass'])));
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
        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre;?>">
        <input type="password" name="pass" value="<?php echo $_POST['pass'] ?>" placeholder="Contraseña">
        <select name="estudios">
            <option value="" disabled selected>--Seleccionar--</option>
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
            <label for="nacionalidad2">Otra:</label>
            <input type="radio" name="nacionalidad" value="Otra" id="nacionalidad2">
        </div>
        <h2>Idiomas:</h2>
        <div class="idiomas">
            <label>Español
                <input type="checkbox" name="idiomas[]" value="Español">
            </label>
            <label>Inglés
                <input type="checkbox" name="idiomas[]" value="Inglés">
            </label>
            <label>Francés
                <input type="checkbox" name="idiomas[]" value="Francés">
            </label>
            <label>Alemán
                <input type="checkbox" name="idiomas[]" value="Alemán" <?php
                
                    if(in_array("Alemán",$_POST["idiomas"])){
                        echo "checked";
                    }
                ?>
                >
            </label>
            <label>Italiano
                <input type="checkbox" name="idiomas[]" value="Italiano">
            </label>
        </div>
        <input type="text" name="email" placeholder="email">
        <input type="file" name="foto">
        <input type="submit" name="validar" value="Validate">
        <input type="submit" name="enviar">
        <input type="reset" name="borrar">
    </form>
</body>
</html>

