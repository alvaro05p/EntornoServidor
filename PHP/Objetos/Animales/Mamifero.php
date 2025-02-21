<?php

abstract class Mamifero extends Animal {
    protected static $totalMamiferos = 0;

    public function __construct($sexo = "M") {
        parent::__construct($sexo);
        self::$totalMamiferos++;
    }

    public static function getTotalMamiferos() {
        return "Total de Mamíferos: " . self::$totalMamiferos . "<br>";
    }

    public function amamantar() {
        if ($this->sexo == "H") {
            echo get_class($this) . ": Amamantando a mis crías<br>";
        } else {
            echo get_class($this) . ": Soy macho, no puedo amamantar<br>";
        }
    }

    public function morirse() {
        parent::morirse();
        self::$totalMamiferos--;
    }

    public function __toString() {
        return parent::__toString() . "Soy un Mamífero<br>";
    }
}