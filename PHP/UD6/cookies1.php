<?php

    if(isset($_COOKIE['usuario']) && isset($_COOKIE['saludo'])){
        if($_COOKIE['saludo'] == "saludo"){
            echo "Hola que tal " . $_COOKIE['usuario'] . "?";
        }else{
            echo "Hasta luego " . $_COOKIE['usuario'] . "!";
        }
    }

    /*Desmontar una cookie
    setcookie('usuario', $usuario, time()-3600);

    Validar si hay cookies guardadas

    if(count($_COOKIE) > 0){
        echo "Hay " . count($_COOKIE) . " cookies guardadas.";
    }*/
    
?>