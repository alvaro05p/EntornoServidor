<?php

include_once "Ave.php";
class Pinguino extends Ave {
    private $nombre;

    public function __construct($sexo = "M", $nombre = "") {
        parent::__construct($sexo);
        $this->nombre = $nombre;
    }

    public function programar() {
        echo "Pingüino " . $this->nombre . ": Soy un pingüino programando en PHP<br>";
    }

    public function alimentarse() {
        parent::alimentarse("peces");
    }

    public function __toString() {
        return parent::__toString() . "Soy un Pingüino, llamado " . $this->nombre . "<br>";
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
