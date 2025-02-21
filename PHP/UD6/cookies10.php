<?php
    $email = $_POST["email"];
    $confirmar = $_POST["confirmar"];
    


    if($email == $confirmar){

        echo "Los email coinciden";
        setcookie("publi", "si", time()+60*60);

        echo "<br>";
        if(isset($_POST["publi"])){
            echo "Desea recibir publicidad";
            setcookie("publi", "Si", time()+60*60);
        }else{
            echo "No desea recibir publicidad";
            setcookie("publi", "No", time()+60*60);
        }

    }else{

        echo "Email no confirmado";
        

    }

    echo "<br>";

    if(isset($_COOKIE["publi"])){
        
        echo $_COOKIE["publi"] . " quiere recibir publicidad (Anterior)";

    }
    
?>