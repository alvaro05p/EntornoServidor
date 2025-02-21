<?php

//Abstract para crear clases que no se puedan instanciar
abstract class Animal{
    
    protected $sexo;
    public static $creados = 0;

    public function __construct($sexo = "M")
    {
        //Por si el sexo no es M ni H
        if($sexo != "M" && $sexo != "H"){
            
            throw new Exception("El sexo debe ser M o H");
        }

        $this->sexo = $sexo;
        
        self::$creados++;
        
    }

    public function dormirse(){
        return "Animal: Zzzzz";
    }

    public function alimentarse($comida){
        return "Estoy comiendo $comida muy a gusto";
    }

    public function morirse(){
        if(self::$creados > 0){
            self::$creados--;
        }
        return "Muriendo...";
    }

    public static function getTotalAnimales(){
        return "Hay un total de " . self::$creados . " animales.\n";
    }

    public function __toString()
    {
        return "Es un animal con sexo " . $this->sexo;
    }
}

?>