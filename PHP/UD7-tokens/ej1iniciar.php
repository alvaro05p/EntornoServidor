<?php

session_start();

if(!isset($_SESSION["token"])){
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

$_SESSION['nombre']=$_POST['nombre'];
$_SESSION['rol']=$_POST['rol'];
if (isset($_SESSION['nombre'])){
    switch ($_SESSION['rol']) {
        case 'gerente':
            $location = 'Location: ej1gerente.php';
            break;
        case 'sindical':
            $location = 'Location: ej1responsable.php';
            break;
        case 'responsable':
            $location = 'Location: ej1sindicalista.php';
            break;
 }
}
header($location . "?token=" . $_POST["token"]);

if(isset($_POST["cerrar"])){
    session_destroy();
    header("Location: ej1iniciar.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
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
    <form action="ej1iniciar.php" method="POST">
        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
        <input type="text" placeholder="Nombre" class="form-control" name="nombre">
        <select name="rol" class="form-select" aria-label="Default select example">
            <option value="gerente">Gerente</option>
            <option value="sindical">Sindicalista</option>
            <option value="responsable">Responsable de Nóminas</option>
        </select>
        <input type="submit" value="Iniciar sesión" class="btn btn-primary" name="iniciar">
        
        <button type="submit" class="btn btn-danger" name="cerrar">Cerrar sesión</button>

    </form>
</body>
</html>