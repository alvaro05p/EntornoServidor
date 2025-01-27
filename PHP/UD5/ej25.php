<?php

    /**
     * @author Álvaro Pardo Peralta
     * Formulario con imagen
     */

    $errores = [];
    
    $mostrar = true;

    // Varibles sacadas del formulario
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
    
        // Expresiones regulares guardadas en variables
        //$regexNombre = '/^[A-ZÁÉÍÓÚÑa-záéíóúñ]+(?: [A-ZÁÉÍÓÚÑa-záéíóúñ]+)*$/';
        //$regexEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $regexPass = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';

        $nombre_img = $dir_img . $_FILES["foto"]["name"];

        $partes = explode(".", $nombre_img);

        $extension = $partes[1];

        $extensiones = ["png","jpg", "webp", "gif"];
        
        // Comprobamos las expresiones regulares y seteamos un color y en caso de error no mostramos

        if (!ctype_alpha($nombre) && !empty($nombre)) {
            $colorNombre = "red"; 
            $mostrar=false;
            $errores[] = "El nombre no puede tener números";
            
        } elseif (!empty($nombre)) {
            $colorNombre = "green"; 
        }

        if (!preg_match($regexPass, $pass) && !empty($pass)) {
            $colorPass = "red";
            $mostrar=false;
            $errores[] = "La contraseña debe tener mayusculas, números y carácteres especiales";
        } elseif (!empty($pass)) {
            $colorPass = "green";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
            $colorEmail = "red"; 
            $mostrar=false; 
             $errores[] = "El email debe tener el formato correcto";
        } elseif (!empty($email)) {
            $colorEmail = "green";
        }

        // Comprobamos que los valores no estén vacíos
        if(empty($nombre)){
            
            $errores[] = "Indica tu nombre";
            $mostrar = false;
        }
        if(empty($pass)){
            $errores[] = "Introduce una contraseña";
            $mostrar = false;
        }
        if(empty($estudios)){
            $errores[] = "Indica tu nivel de estudios";
            $mostrar = false;
        }
        if(empty($nacionalidad)){
            $errores[] = "Selecciona una nacionalidad";
            $mostrar = false;
        }
        if(empty($idiomas)){
            $errores[] = "Selecciona mínimo un idioma";
            $mostrar = false;
        }
        if(empty($email)){
            $errores[] = "Introduce tu e-mail";
            $mostrar = false;
        }
        //Comprobamos que esté la imagen, que contenga una extension correcta y la subimos
        if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == UPLOAD_ERR_OK) {
            $nombre_img = $dir_img . $_FILES["foto"]["name"];
            $partes = explode(".", $nombre_img);
            $extension = end($partes);
        
            $extensiones = ["png", "jpg", "webp", "gif"];
        
            if (!in_array($extension, $extensiones)) {
                $errores[] = "Extensión de la imagen no válida";
                $mostrar = false;
            } else {
                if (!file_exists($nombre_img)) {
                    move_uploaded_file($_FILES["foto"]["tmp_name"], $nombre_img);
                }
            }
        } else if (!empty($foto_url)) {
            $nombre_img = $foto_url; 
        } else {
            $errores[] = "Introduce una foto de perfil";
            $mostrar = false;
        }

        if($mostrar){
            echo "<h3 style='color: lightgreen'>Formulario correcto</h3>";
        }

    }

    //Enviamos la url concatenando todos los valores necesarios
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
    <ul>
        <?php 
            
            foreach ($errores as $error) {
                echo "<li style='color:red';>$error</li>";
            }
        ?>
    </ul>

    <form action="ej25.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre;?>" style="border-color:<?php 
        echo $colorNombre;
    ?>;">
        <input type="password" name="pass" value="<?php echo $_POST['pass'] ?>" placeholder="Contraseña" style="border-color:<?php 
        echo $colorPass;
    ?>;">
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
        <input type="text" name="email" placeholder="email" value="<?php echo $email ?>" style="border-color:<?php 
            echo $colorEmail;
        ?>;">
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

