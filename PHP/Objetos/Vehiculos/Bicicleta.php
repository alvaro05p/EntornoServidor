<?php

require_once "Vehiculo.php";
class Bicicleta extends Vehiculo{

    public function __construct()
    {
        parent::__construct();
    }

    public function hacerCaballito(){
        return "Voy de wheellie";
    }

    public function ponerCadena(){
        return "Recoloco la cadena";
    }

    public function verKMRecorridos()
    {
        return "La bici tiene: " . $this->km . "km";
    }

}

?>