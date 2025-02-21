<?php

include_once "Mamifero.php";
class Perro extends Mamifero {
    private $nombre;
    private $raza;

    public function __construct($sexo = "M", $nombre = "", $raza = "") {
        parent::__construct($sexo);
        $this->nombre = $nombre;
        $this->raza = $raza;
    }

    public function ladra() {
        echo "Perro " . $this->nombre . ": Guau guau<br>";
    }

    public function alimentarse() {
        parent::alimentarse("carne");
    }

    public function __toString() {
        return parent::__toString() . "Soy un Perro, llamado " . $this->nombre . "<br>";
    }

    public static function consSexoNombre($sexo, $nombre) {
        return new self($sexo, $nombre);
    }
    
    public static function consFull($sexo, $nombre, $raza) {
        return new self($sexo, $nombre, $raza);
    }
    
}
