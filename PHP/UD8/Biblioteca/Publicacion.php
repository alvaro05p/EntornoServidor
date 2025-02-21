<?php

class Publicacion{

    protected $isbn;
    protected $titulo;
    protected $yr = 2024;

    function __construct($isbn,$titulo,$yr)
    {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->yr = $yr;
    }

}

?>