<?php

include_once "Animal.php";
abstract class Ave extends Animal {
    protected static $totalAves = 0;

    public function __construct($sexo = "M") {
        parent::__construct($sexo);
        self::$totalAves++;
    }

    public static function getTotalAves() {
        return "Total de Aves: " . self::$totalAves . "<br>";
    }

    public function ponerHuevo() {
        if ($this->sexo == "H") {
            echo get_class($this) . ": He puesto un huevo!<br>";
        } else {
            echo get_class($this) . ": Soy macho, no puedo poner huevos<br>";
        }
    }

    public function morirse() {
        parent::morirse();
        self::$totalAves--;
    }

    public function __toString() {
        return parent::__toString() . "Soy un Ave<br>";
    }

    public static function consSexo($sexo) {
        return new self($sexo);
    }
    
    public static function consFull($sexo, $nombre) {
        return new self($sexo, $nombre);
    }
}
