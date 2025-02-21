<?php

    echo "<br>";
    echo "Actual:";
    echo "<br>";

    session_start();

    if(isset($_SESSION['usuario']) && isset($_SESSION['saludo'])){
        if($_SESSION['saludo'] == "saludo"){
            echo "Hola que tal " . $_SESSION['usuario'] . "?";
        }else{
            echo "Hasta luego " . $_SESSION['usuario'] . "!";
        }
    }

    echo "<br>";
    echo "Anterior:";
    echo "<br>";

    

    if(isset($_COOKIE['usuario']) && isset($_COOKIE['saludo'])){
        if($_COOKIE['saludo'] == "saludo"){
            echo "Hola que tal " . $_COOKIE['usuario'] . "?";
        }else{
            echo "Hasta luego " . $_COOKIE['usuario'] . "!";
        }
    }

    setcookie('usuario', $_SESSION["usuario"], time()+3600);
    setcookie('saludo', $_SESSION["saludo"], time()+3600);
    

    /*Desmontar una cookie
    setcookie('usuario', $usuario, time()-3600);

    Validar si hay cookies guardadas

    if(count($_COOKIE) > 0){
        echo "Hay " . count($_COOKIE) . " cookies guardadas.";
    }*/
    
?>