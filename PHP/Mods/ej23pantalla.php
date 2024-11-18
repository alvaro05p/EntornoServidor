<?php
session_start();

    echo "Estudios: " . $_SESSION["estudios"];
    echo "<br>";

    foreach($_SESSION["situacion"] as $situacion){
        echo "Situación: " . $situacion;
        echo "<br>";
    }

    if(isset($_SESSION["hobbie"])){
        foreach($_SESSION["hobbie"] as $hobbie){
            echo "Hobbies: " . $hobbie;
            echo "<br>";
        }
    }else{
        echo  "Hobbies: " . $_SESSION["otros"];
        echo "<br>";
    }

?>