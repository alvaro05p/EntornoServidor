<?php
    
    $mostrar = true;

    $nombre = $_POST["nombre"];
    $pass = $_POST["pass"];
    $estudios = $_POST["estudios"];
    $nacionalidad = $_POST["nacionalidad"];
    $idiomas = $_POST["idiomas"];
    $email = $_POST["email"];
    $dir_img = "img/";
    $foto = $_FILES["foto"];
    $foto_url = $_POST["foto_url"];

    if(isset($_POST["validar"])){
    
        $regexNombre = '/^[A-ZÁÉÍÓÚÑa-záéíóúñ]+(?: [A-ZÁÉÍÓÚÑa-záéíóúñ]+)*$/';
        $regexEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $regexPass = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';


        $nombre_img = $dir_img . $_FILES["foto"]["name"];

        $partes = explode(".", $nombre_img);

        $extension = $partes[1];

        $extensiones = ["png","jpg", "webp", "gif"];

        if(!in_array($extension, $extensiones)){
            echo "Extensión de la img no válida";
        }else{
            move_uploaded_file($_FILES["foto"]["tmp_name"], $nombre_img); 
        }

        if(empty($nombre)){
            
            echo "Indica tu nombre";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($pass)){
            echo "Introduce una contraseña";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($estudios)){
            echo "Indica tu nivel de estudios";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($nacionalidad)){
            echo "Selecciona una nacionalidad";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($idiomas)){
            echo "Selecciona mínimo un idioma";
            echo "<br>";
            $mostrar = false;
        }
        if(empty($email)){
            echo "Introduce tu e-mail";
            echo "<br>";
            $mostrar = false;
        }
        if(!isset($foto_url)){
            echo "Introduce una foto de perfil";
            echo "<br>";
            $mostrar = false;
        }

        if($mostrar){
            echo "<h3 style='color: lightgreen'>Formulario correcto</h3>";
        }

    }

    if($mostrar && isset($_POST["enviar"])){

        $enviar = "nombre=" . urlencode($nombre) . "&pass=" . urlencode($pass) . "&nacionalidad=" . urlencode($nacionalidad) . "&email=" . urlencode($email) . "&estudios=" . urlencode($estudios) . "&foto=" . urlencode($foto_url);

        foreach ($idiomas as $idioma) {
            $enviar .= "&idiomas[]=" . urlencode($idioma);
        }

        header("Location: ej25pantalla.php?$enviar");
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
        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre;?>" style="<?php  ?>">
        <input type="password" name="pass" value="<?php echo $_POST['pass'] ?>" placeholder="Contraseña">
        <select name="estudios">
            <option value="" disabled selected>--Seleccionar--</option>
            <option value="Sin estudios" <?php 
            
            if($estudios == "Sin estudios"){
                echo "selected";
            }
        
            ?>>Sin estudios</option>
            <option value="ESO" <?php 
            
            if($estudios == "ESO"){
                echo "selected";
            }
        
            ?>>ESO</option>
            <option value="Bachillerato" <?php 
            
            if($estudios == "Bachillerato"){
                echo "selected";
            }
        
            ?>>Bachillerato</option>
            <option value="FP" <?php 
            
            if($estudios == "FP"){
                echo "selected";
            }
        
            ?>>FP</option>
            <option value="Carrera" <?php 
            
            if($estudios == "Carrera"){
                echo "selected";
            }
        
            ?>>Carrera</option>
        </select>
        <h2>Nacionalidad:</h2>
        <div>
            <label for="nacionalidad1">Española:</label>
            <input type="radio" name="nacionalidad" value="Española" id="nacionalidad1" <?php 
            
                if($nacionalidad == "Española"){
                    echo "checked";
                }
            
            ?>>
        </div>
        <div>
            <label for="nacionalidad2">Otra:</label>
            <input type="radio" name="nacionalidad" value="Otra" id="nacionalidad2" <?php 
            
            if($nacionalidad == "Otra"){
                echo "checked";
            }
        
        ?>>
        </div>
        <h2>Idiomas:</h2>
        <div class="idiomas">
            <label>Español
            <input type="checkbox" name="idiomas[]" value="Español" <?php 
            
            if(isset($idiomas) && in_array("Español", $idiomas)){
                echo "checked";
            }
        
            ?>>
            </label>
            <label>Inglés
                <input type="checkbox" name="idiomas[]" value="Inglés" <?php 
            
            if(isset($idiomas) && in_array("Inglés", $idiomas)){
                echo "checked";
            }
        
            ?>>
            </label>
            <label>Francés
                <input type="checkbox" name="idiomas[]" value="Francés" <?php 
            
            if(isset($idiomas) && in_array("Francés", $idiomas)){
                echo "checked";
            }
        
            ?>>
            </label>
            <label>Alemán
                <input type="checkbox" name="idiomas[]" value="Alemán" <?php 
            
            if(isset($idiomas) && in_array("Alemán", $idiomas)){
                echo "checked";
            }
        
            ?>>
            </label>
            <label>Italiano
                <input type="checkbox" name="idiomas[]" value="Italiano" <?php 
            
            if(isset($idiomas) && in_array("Italiano", $idiomas)){
                echo "checked";
            }
        


            ?>>
            </label>
        </div>
        <input type="text" name="email" placeholder="email" value="<?php echo $email ?>">
        <input type="file" name="foto">
        <?php 
        
            echo "<img src='$nombre_img' alt='Imagen subida' style='max-width: 100%; height: auto;'>";

        ?>
        <input type="hidden" name="foto_url" value="<?php echo $nombre_img; ?>">
        <input type="submit" name="validar" value="Validate">
        <input type="submit" name="enviar">
        <input type="reset" name="borrar">
    </form>
</body>
</html>

