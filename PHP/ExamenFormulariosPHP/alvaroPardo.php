<?php

    $errores = [];

    $nombre = $_POST["nombre"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];

    $tipo = $_POST["tipo"];

    $poblacion = $_POST["poblacion"];

    $elementos = $_POST["elementos"];

    $necesidades = $_POST["necesidades"];

    $aceptada = $_POST["aceptada"];

    $dir_img = "img/";
    $foto = $_FILES["foto"];
    $foto_url = $_POST["foto_url"];

    echo $ruta;

    if(isset($_POST["validar"])){
        $nombre_img = $dir_img . $_FILES["foto"]["name"];

        $partes = explode(".", $nombre_img);

        $extension = $partes[1];

        $extensiones = ["png","jpg", "webp", "gif"];
        if(!ctype_alpha($nombre) || empty($nombre)){
            $errores[] = "nombre";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)){
            $errores[] = "email";
        }
        if(empty($usuario)){
            $errores[] = "usuario";
        }
        if(empty($pass)){
            $errores[] = "pass";
        }
        if(empty($tipo)){
            $errores[] = "tipo";
        }
        if(empty($poblacion)){
            $errores[] = "poblacion";
        }
        if(empty($elementos)){
            $errores[] = "elementos";
        }
        if(empty($necesidades)){
            $errores[] = "necesidades";
        }
        if(empty($aceptada)){
            $errores[] = "politica de privacidad";
        }

        if(empty($errores)) {
            echo "<h3 style='color:green;'>Formulario listo para enviar.</h3>";
        }else{
            foreach($errores as $error){
                echo "<li style='color:red'>Error con el campo " . $error . "</li>";
            }
        }

        if(empty($foto)){
            $errores[] = "foto";
        }

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
    }

    

    if(empty($errores) && isset($_POST["enviar"]) && isset($aceptada)){

        $enviar = "nombre=" . urlencode($nombre) . "&pass=" . urlencode($pass) . "&usuario=" . urlencode($usuario) . "&email=" . urlencode($email) . "&tipo=" . urlencode($tipo) . "&poblacion=" . urlencode($poblacion) . "&foto=" . urlencode($foto_url);

        foreach ($elementos as $elemento) {
            $enviar .= "&elementos[]=" . urlencode($elemento);
        }

        foreach ($necesidades as $necesidad) {
            $enviar .= "&necesidades[]=" . urlencode($necesidad);
        }

        header("Location: alvaroPardo_ok.php?$enviar");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Necesidades Post-Dana</title>
</head>
<body>
    <form action="alvaroPardo.php" method="POST">
        <fieldset>
            <legend>Datos personales</legend>
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre ?>">
            <br>
            <input type="text" name="email" placeholder="Email" value="<?php echo $email ?>">
            <br>
            <input type="Sin estudiostext" name="usuario" placeholder="Usuario" value="<?php echo $usuario ?>">
            <br>
            <input type="password" name="pass" placeholder="Contraseña" value="<?php echo $pass ?>">
            <br>
        </fieldset>
        <fieldset>
            <legend>Situación personal</legend>
            <input type="radio" value="particular" name="tipo" <?php 
            
            if($tipo == "particular"){
                echo "checked";
            }
        
            ?>>
            <label for="">Particular</label>
            <input type="radio" value="empresa" name="tipo" <?php 
            
            if($tipo == "empresa"){
                echo "checked";
            }
        
            ?>>
            <label for="">Empresa</label>
            <br>
            <br>
            <label for="poblacion">Población:</label>
            <br>
            <select name="poblacion">
                <option value="Aldaia" <?php 
            
                    if($poblacion == "Aldaia"){
                        echo "selected";
                    }
            
                ?>>Aldaia</option>
                <option value="Catarroja" <?php 
            
                    if($poblacion == "Catarroja"){
                        echo "selected";
                    }
            
                ?>>Catarroja</option>
                <option value="Paiporta"
                <?php 
            
                    if($poblacion == "Paiporta"){
                        echo "selected";
                    }
            
                ?>>Paiporta</option>
                <option value="Picanya" <?php 
            
            if($poblacion == "Picanya"){
                echo "selected";
            }
    
            ?>>Picanya</option>
                <option value="Sedavi" <?php 
            
            if($poblacion == "Sedavi"){
                echo "selected";
            }
    
            ?>>Sedavi</option>
            </select>
            <br>
            <label for="elementos">Elementos afectados:</label>
            <br>
            <select name="elementos[]" multiple>
                <option value="Casa" <?php 
            
            if(isset($elementos) && in_array("Casa", $elementos)){
                echo "selected";
            }?>>Casa</option>
                <option value="Bajo Comercial" <?php 
            
            if(isset($elementos) && in_array("Bajo Comercial", $elementos)){
                echo "selected";
            }?>>Bajo Comercial</option>
                <option value="Sotanos garage" <?php 
            
            if(isset($elementos) && in_array("Sotanos garaje", $elementos)){
                echo "selected";
            }?>>Sotanos garage</option>
                <option value="Trastero" <?php 
            
            if(isset($elementos) && in_array("Trastero", $elementos)){
                echo "selected";
            }?>>Trastero</option>
                <option value="Vehiculo" <?php 
            
            if(isset($elementos) && in_array("Vehiculo", $elementos)){
                echo "selected";
            }?>>Vehiculo</option>
            </select>
            <br>
            
        </fieldset>
        <fieldset>
            <legend>Necesidades</legend>
            <br>
            <input type="checkbox" name="necesidades[]" value="extraccion" <?php 
            
            if(isset($necesidades) && in_array("extraccion", $necesidades)){
                echo "checked";
            }?>>
            <label >Extracción de lodo</label>
            <br>
            <input type="checkbox" name="necesidades[]" value="limpieza" <?php 
            
            if(isset($necesidades) && in_array("limpieza", $necesidades)){
                echo "checked";
            }?>>
            <label >Limpieza</label>
            <br>
            <input type="checkbox" name="necesidades[]" value="desinfección" <?php 
            
            if(isset($necesidades) && in_array("desinfección", $necesidades)){
                echo "checked";
            }?>>
            <label >Desinfección y secado</label>
            <br>
            <input type="checkbox" name="necesidades[]" value="revisión" <?php 
            
            if(isset($necesidades) && in_array("revisión", $necesidades)){
                echo "checked";
            }?>>
            <label >Revisión estructural</label>
            <br>
            <input type="checkbox" name="necesidades[]" value="reconstrucción" <?php 
            
            if(isset($necesidades) && in_array("reconstrucción", $necesidades)){
                echo "checked";
            }?>>
            <label >Reconstrucción</label>
            <br>
            <input type="checkbox" name="necesidades[]" value="excarcelación" <?php 
            
            if(isset($necesidades) && in_array("excarcelación", $necesidades)){
                echo "checked";
            }?>>
            <label>Excarcelación de coches</label>
            <br>
            </fieldset>
            <fieldset>
                <legend>Privacidad:</legend>
                <label>Acepta la política LOPDGDD</label>
                <input type="checkbox" name="aceptada" <?php 
            
            if(isset($aceptada) ){
                echo "checked";
            }?>>
                
                
            
            </fieldset>

            <input type="file" name="foto">
        <?php 

            echo "<img src='$nombre_img' alt='Imagen subida' style='max-width: 100%; height: auto;'>";

        ?>
        <input type="hidden" name="foto_url" value="<?php echo $nombre_img; ?>">
            <input type="submit" value="validar" name="validar">
            <input type="submit" name="enviar">
            <input type="reset">
    </form>
</body>
</html>