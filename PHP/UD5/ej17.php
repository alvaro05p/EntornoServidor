<?php

    $palabras1=$_POST["palabras1"];
    $palabras2=$_POST["palabras2"];

    function traductor($palabras){

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
                $traducida = $traducciones[$palabra];
                array_push($traduccion, $traducida);
            }

        }

        return $traduccion;

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traductor</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="ej17.php" method="POST">
        <table name="tabla">
            <tr name="palabra">
                <td>
                    <select name="palabras1[]" multiple size="3">
                        <option value="Soothe">Soothe</option>
                        <option value="Aloof">Aloof</option>
                        <option value="Aghast">Aghast</option>
                        <option value="Wistful">Wistful</option>
                        <option value="Yearn">Yearn</option>
                        <option value="Daunting">Daunting</option>
                        <option value="Mirth">Mirth</option>
                        <option value="Dread">Dread</option>
                        <option value="Dusk">Dusk</option>
                        <option value="Shriek">Shriek</option>
                    </select>
                </td>
                <td>
                    <?php 

                        $traduccion = traductor($palabras1);

                        foreach($traduccion as $traducida){
                            
                            echo $traducida . " ";
                        }
                    ?>
                </td>
            </tr>
            <tr name="palabra">
                <td>
                    <select name="palabras2[]" multiple size="3">
                        <option value="Soothe">Soothe</option>
                        <option value="Aloof">Aloof</option>
                        <option value="Aghast">Aghast</option>
                        <option value="Wistful">Wistful</option>
                        <option value="Yearn">Yearn</option>
                        <option value="Daunting">Daunting</option>
                        <option value="Mirth">Mirth</option>
                        <option value="Dread">Dread</option>
                        <option value="Dusk">Dusk</option>
                        <option value="Shriek">Shriek</option>
                    </select>
                </td>
                <td>
                    <?php 
                        $traduccion = traductor($palabras2);

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