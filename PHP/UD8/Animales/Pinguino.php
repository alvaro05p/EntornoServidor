<?php

include_once "Ave.php";
class Pinguino extends Ave {
    private $nombre;

    public function __construct($sexo = "M", $nombre = "") {
        parent::__construct($sexo);
        $this->nombre = $nombre;
    }

    public function programar() {
        echo "Pingüino " . $this->nombre . ": Soy un pingüino programando en PHP\n";
    }

    public function alimentarse($comida = "peces") {
        echo "Pinguino $this->nombre: estoy comiendo $comida \n";
        parent::alimentarse($comida);
    }

    public function morirse(){
        echo "$this->nombre: Adiós!\n";
        parent::morirse();
    }

    public function __toString() {
        return "Soy un Animal, un Ave, en concreto un Pingüino, con sexo ". ($this->sexo === "M" ?  "MACHO" : "HEMBRA") . ", llamado " . $this->nombre . "\n";
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
