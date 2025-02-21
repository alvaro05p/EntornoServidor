<?php
    $email = $_POST["email"];
    $confirmar = $_POST["confirmar"];
    echo $email;
    echo $confirmar;
    echo "<br>";

    if($email == $confirmar){

        echo "Los email coinciden";

        echo "<br>";
        if(isset($_POST["publi"])){
            echo "Desea recibir publicidad";
        }else{
            echo "No desea recibir publicidad";
        }

    }else{

        echo "Email no confirmado";

    }
    
?>