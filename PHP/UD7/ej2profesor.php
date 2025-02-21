<?php

    session_start();

    $nombre = $_SESSION["nombre"];
    $apellido = $_SESSION["apellido"];
    $asignatura = $_SESSION["asignatura"];
    $grupo = $_SESSION["grupo"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION["rol"]; ?></title>
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
        <h1>Bienvenido a la pagina de profesor</h1>
        <h3>Tus datos:</h3>
        <ul>
            <li>Nombre: <?php echo $nombre?></li>
            <li>Apellido: <?php echo $apellido?></li>
            <li>Asignatura: <?php echo $asignatura?></li>
            <li>Grupo: <?php echo $grupo?></li>
        </ul>
        <form action="ej2profesor.php" method="POST">

            <button type="submit" class="btn btn-danger" name="cerrar">Cerrar sesión</button>
            
        </form>
</body>
</html>

<?php

        if(isset($_POST["cerrar"])){
            session_destroy();
            header("Location: ej2.php");
        }

?>