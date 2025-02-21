<?php

class Publicacion{

    private $isbn;
    private $titulo;
    private $yr = 2024;

    function __construct($isbn,$titulo,$yr)
    {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->yr = $yr;
    }

}

?>