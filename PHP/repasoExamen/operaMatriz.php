<?php

    function generar(){
        return rand(1, 100);
    }

    for($i=0; $i<=3; $i++){
        $num = generar();
        $matriz1[$i] = $num;
    }

    for($i=0; $i<=3; $i++){
        $num = generar();
        $matriz2[$i] = $num;
    }

    function operamatriz($matriz1, $matriz2, $operacion){
        
        $resultado =  [];
        switch ($operacion) {
            case 's':
                $signo = "+";
                break;
            case 'r':
                $signo = "-";
                break;
            case 'm':
                $signo = "*";
                break;
            case 'd':
                $signo = "/";
                break;
            default:
                return "Signo no valido";
                break;
        }
                for($i=0; $i<=3; $i++){
                    $resultado[$i] = eval("return $matriz1[$i] $signo $matriz2[$i];");
                }
            return $resultado;
        
    }

    $signo = "m";

    print_r(operamatriz($matriz1, $matriz2, $signo));

?>