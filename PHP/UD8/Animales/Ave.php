<?php

require_once "Animal.php";

abstract class Ave extends Animal{
    
    protected static $avesCreadas=0;
    
    public function __construct($sexo = "M"){
        parent::__construct($sexo);
        self::$avesCreadas++;
    }

    public function ponerHuevo(){
        return "Poniendo huevo...";
    }

    public function morirse(){
        parent::morirse();
        if(self::$avesCreadas > 0){
            self::$avesCreadas--;
        }
    }

    function __toString()
    {
        return "Mira que gran ave con sexo " . $this->sexo;
    }

    public static function getTotalAves(){
        return "Hay un total de " . self::$avesCreadas . " aves \n";
    }



}

?>