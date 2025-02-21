<?php

abstract class Animal {
    protected $sexo;
    protected static $totalAnimales = 0;

    public function __construct($sexo = "M") {
        $this->sexo = strtoupper($sexo);
        self::$totalAnimales++;
    }

    public static function getTotalAnimales() {
        return "Total de Animales: " . self::$totalAnimales . "<br>";
    }

    public function dormirse() {
        echo get_class($this) . ": Zzzzzzz<br>";
    }

    public function alimentarse() {
        echo get_class($this) . ": Estoy comiendo " . $this . "<br>";
    }

    public function morirse() {
        echo get_class($this) . ": Adiós!<br>";
        self::$totalAnimales--;
    }

    public function __toString() {
        return "Soy un Animal, con sexo " . ($this->sexo == "H" ? "HEMBRA" : "MACHO") . "<br>";
    }
}
