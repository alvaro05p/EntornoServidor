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
        echo "Gato " . $this->nombre . ": Miauuuu\n";
    }

    public function alimentarse($comida = "pescado") {
        echo "Gato $this->nombre: estoy comiendo $comida \n";
        parent::alimentarse($comida);
    }

    public function morirse(){
        echo "Gato $this->nombre: Adiós!\n";
        parent::morirse();
    }

    public function __toString() {
        return "Soy un Animal, un Mamífero, en concreto un Gato, con sexo ". ($this->sexo === "M" ?  "MACHO" : "HEMBRA") . ", raza $this->raza " .($this->nombre != "" ?  " llamado " . $this->nombre : " y no tengo nombre") . "\n";
    }

    public static function consSexoNombre($sexo, $nombre) {
        return new self($sexo, $nombre);
    }
    
    public static function consFull($sexo, $nombre, $raza) {
        return new self($sexo, $nombre, $raza);
    }

    public function amamantar(){
        if ($this->sexo == "H") {
            echo "Gato $this->nombre: Amamantando a mis crías\n";
        } else {
            echo "Gato $this->nombre: Soy macho, no puedo amamantar\n";
        }

        parent::amamantar();
    }

    
}
