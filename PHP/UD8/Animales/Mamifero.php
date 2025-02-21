<?php

require_once "Animal.php";
abstract class Mamifero extends Animal {
    protected static $totalMamiferos = 0;

    public function __construct($sexo = "M") {
        parent::__construct($sexo);
        self::$totalMamiferos++;
    }

    public static function getTotalMamiferos() {
        return "Hay un total de " . self::$totalMamiferos . " mamíferos." . "\n";
    }

    public function amamantar() {
        return "Amamantando...";
    }

    public function morirse() {
        //Lamamos a la clase padre y luego añadimos la funcionalidad nueva
        parent::morirse();
        self::$totalMamiferos--;
    }

    public function __toString() {
        return parent::__toString() . "Soy un Mamífero\n";
    }

}