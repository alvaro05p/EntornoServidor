<?php

require_once "Animal.php";
class Lagarto extends Animal {
    private $nombre;

    //Constructor con parametros opcionales por defecto
    public function __construct($sexo = "M", $nombre = "") {
        parent::__construct($sexo);
        $this->nombre = $nombre;
    }

    public function tomarSol() {
        echo "Lagarto " . $this->nombre . ": Estoy tomando el sol\n";
    }

    public function dormirse(){
        echo "Lagarto " . $this->nombre .": Zzzzzzz\n";
        parent::dormirse();
    }

    public function alimentarse($comida = "insectos") {
        echo "Lagarto $this->nombre: estoy comiendo $comida \n";
        parent::alimentarse($comida);
    }

    public function __toString() {
        return "Soy un Animal, en concreto un Lagarto, con sexo ". ($this->sexo === "M" ?  "MACHO" : "HEMBRA") . ", llamado " . $this->nombre . "\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function morirse(){
        echo "Lagarto $this->nombre: Adiós!\n";
        parent::morirse();
    }

    //Constructor con solo sexo
    public static function consSexo($sexo) {
        return new Lagarto($sexo);
    }

    //Constructor con todos los parámetros
    public static function consFull($sexo, $nombre) {
        return new Lagarto($sexo, $nombre);
    }
    
}
