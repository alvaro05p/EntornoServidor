<?php
class Lagarto extends Animal {
    private $nombre;

    public function __construct($sexo = "M", $nombre = "") {
        parent::__construct($sexo);
        $this->nombre = $nombre;
    }

    public function tomarSol() {
        echo "Lagarto " . $this->nombre . ": Estoy tomando el sol<br>";
    }

    public function alimentarse() {
        parent::alimentarse("insectos");
    }

    public function __toString() {
        return parent::__toString() . "Soy un Lagarto, llamado " . $this->nombre . "<br>";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public static function consSexo($sexo) {
        return new self($sexo);
    }
    
    public static function consFull($sexo, $nombre) {
        return new self($sexo, $nombre);
    }
}
