<?php

    session_start();

    if(!isset($_SESSION["token"])){
        $_SESSION['token'] = bin2hex(random_bytes(32));
    }

    if (isset($_POST['enviar'])){

        $_SESSION["nombre"]=$_POST["nombre"];
        $_SESSION["apellido"]=$_POST["apellido"];
        $_SESSION["asignatura"]=$_POST["asignatura"];
        $_SESSION["grupo"]=$_POST["grupo"];

        if(isset($_POST["mayor"])){
            $_SESSION["mayor"] = "si";
        }else{
            $_SESSION["mayor"] = "no";
        }

        if(isset($_POST["cargo"])){
            $_SESSION["cargo"] = "si";
        }else{
            $_SESSION["cargo"] = "no";
        }

        if($_SESSION["mayor"] == "no" && $_SESSION["cargo"] == "si"){
            $_SESSION['rol'] = "Delegado";
        }else if($_SESSION["mayor"] == "no" && $_SESSION["cargo"] == "no"){
            $_SESSION['rol'] = "Estudiante";
        }else if($_SESSION["mayor"] == "si" && $_SESSION["cargo"] == "no"){
            $_SESSION['rol'] = "Profesor";
        }else if($_SESSION["mayor"] == "si" && $_SESSION["cargo"] == "si"){
            $_SESSION['rol'] = "Director";
        }

        switch ($_SESSION['rol']) {
            case 'Delegado':
                $location = 'Location: ej2delegado.php';
                break;
            case 'Estudiante':
                $location = 'Location: ej2estudiante.php';
                break;
            case 'Profesor':
                $location = 'Location: ej2profesor.php';
                break;
            case 'Director':
                $location = 'Location: ej2director.php';
                break;
        }

        header($location . "?token=" . $_POST["token"]);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body{
            margin: 10px;
            background-color: gray;
            color: white;
        }

    </style>
</head>
<body>
    <form action="ej2.php" method="POST">
        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
        <fieldset class="col-6">
            <legend>Datos del alumno</legend>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            <input type="text" class="form-control" name="apellido" placeholder="Apellido">
            <input type="text" class="form-control" name="asignatura" placeholder="Asignatura">
            <input type="text" class="form-control" name="grupo" placeholder="Grupo">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="mayor">
                <label class="form-check-label">Mayor de edad</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="cargo">
                <label class="form-check-label">Tiene algún cargo</label>
            </div>

        </fieldset>

        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    </form>
</body>
</html>