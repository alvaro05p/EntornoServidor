<?php

include_once "Animal.php";
class Gato extends Mamifero {
    private $nombre;
    private $raza;

    public function __construct($sexo = "M", $nombre = "", $raza = "") {
        parent::__construct($sexo);
        $this->nombre = $nombre;
        $this->raza = $raza;
    }

    public function maulla() {
        echo "Gato " . $this->nombre . ": Miauuuu<br>";
    }

    public function alimentarse() {
        parent::alimentarse("pescado");
    }

    public function __toString() {
        return parent::__toString() . "Soy un Gato, llamado " . $this->nombre . "<br>";
    }

    public static function consSexoNombre($sexo, $nombre) {
        return new self($sexo, $nombre);
    }
    
    public static function consFull($sexo, $nombre, $raza) {
        return new self($sexo, $nombre, $raza);
    }
}
