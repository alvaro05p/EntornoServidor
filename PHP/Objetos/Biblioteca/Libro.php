<?php 

include_once 'Publicacion.php';
class Libro extends Publicacion{

    private $prestado = false;

    public function __construct($isbn,$titulo,$yr){
        parent::__construct($isbn,$titulo,$yr);
    }

    public function estaPrestado(){
        return $this->prestado;
    }

    public function presta(){
        $this->prestado = true;
    }

    public function devuelve(){
        $this->prestado = false;
    }

    public function mostrarPrestado(){
        return $this->prestado;
    }

}

?>