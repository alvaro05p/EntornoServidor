<?php

    if(isset($_POST["palabras"])){

        $palabras=$_POST["palabras"];

        $traduccion = [];

        $traducciones= [
            "Soothe" => "Calmar",
            "Aloof" => "Distante",
            "Aghast" => "Espantado",
            "Wistful" => "Melancólico",
            "Yearn" => "Anhelar",
            "Daunting" => "Desalentador",
            "Mirth" => "Alegría",
            "Dread" => "Temor",
            "Dusk" => "Anochecer",
            "Shriek" => "Chillido"
        ];

        if(!empty($palabras)){

            foreach($palabras as $palabra ){
                array_push($traduccion, $palabra);
            }

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="ej17.php" method="POST">
        <table name="tabla">
            <tr name="palabra">
                <td>
                    <select name="palabras[]" multiple size="3">
                        <option value="soothe">Soothe</option>
                        <option value="sloof">Aloof</option>
                        <option value="aghast">Aghast</option>
                        <option value="wistful">Wistful</option>
                        <option value="yearn">Yearn</option>
                        <option value="daunting">Daunting</option>
                        <option value="mirth">Mirth</option>
                        <option value="dread">Dread</option>
                        <option value="dusk">Dusk</option>
                        <option value="shriek">Shriek</option>
                    </select>
                </td>
                <td>
                    <?php 
                        foreach($traduccion as $traducida){
                            echo $traducida . " ";
                        }
                    ?>
                </td>
            </tr>
        </table>

        <input type="submit" name="traducir" value="traducir">
    </form>
</body>
</html>