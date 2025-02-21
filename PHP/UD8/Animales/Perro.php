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
        echo "Perro " . $this->nombre . ": Guau guau\n";
    }

    public function alimentarse($comida = "carne") {
        echo "Perro $this->nombre: estoy comiendo $comida \n";
        //Añade la logica original de la clase padre
        parent::alimentarse($comida);
    }

    public function morirse(){
        echo "Perro $this->nombre: Adiós!\n";
        parent::morirse();
    }

    //(condicion ?  esperado : else) es una forma mas compacta de hacer un if
    public function __toString() {
        return "Soy un Animal, un Mamífero, en concreto un Perro, con sexo ". ($this->sexo === "M" ?  "MACHO" : "HEMBRA") . ", raza $this->raza" .($this->nombre != "" ?  " llamado " . $this->nombre : " y no tengo nombre") . "\n";
    }

    public static function consSexoNombre($sexo, $nombre) {
        //Crea un nuevo objeto de la misma clase usando su constructor
        return new self($sexo, $nombre);
    }
    
    public static function consFull($sexo, $nombre, $raza) {
        return new self($sexo, $nombre, $raza);
    }

    public function amamantar(){
        if ($this->sexo == "H") {
            echo "Perro $this->nombre: Amamantando a mis crías\n";
        } else {
            echo "Perro $this->nombre: Soy macho, no puedo amamantar\n";
        }

        parent::amamantar();
    }
    
}
