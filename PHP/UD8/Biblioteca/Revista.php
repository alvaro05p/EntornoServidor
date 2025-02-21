<?php 

include_once 'Publicacion.php';
class Revista extends Publicacion{

    private $numPublicacion;

    public function __construct($isbn,$titulo,$yr,$numPublicacion){
        parent::__construct($isbn,$titulo,$yr);
        $this->numPublicacion = $numPublicacion;
    }

    public function __toString() {
        return "Título: " . $this->titulo . 
               " | ISBN: " . $this->isbn . 
               " | Año: " . $this->yr;
    }

}

?>