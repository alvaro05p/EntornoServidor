<?php

include_once "Ave.php";
class Canario extends Ave {
    private $nombre;

    public function __construct($sexo = "M", $nombre = "") {
        parent::__construct($sexo);
        $this->nombre = $nombre;
    }

    public function pia() {
        echo "Canario " . $this->nombre . ": Pio pio pio<br>";
    }

    public function alimentarse() {
        parent::alimentarse("alpiste");
    }

    public function __toString() {
        return parent::__toString() . "Soy un Canario, llamado " . $this->nombre . "<br>";
    }

    public static function consSexo($sexo) {
        return new self($sexo);
    }
    
    public static function consFull($sexo, $nombre) {
        return new self($sexo, $nombre);
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
}
