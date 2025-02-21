<?php

    class Terminal{

        /** 
         * @author Álvaro Pardo Peralta
        */

        protected $numero;
        protected $tiempoConversacion;

        function __construct($numero)
        {
            $this->numero = $numero;
            $this->tiempoConversacion = 0;
        }

        function __toString()
        {
            return "Numero: " . $this->numero . " Tiempo: " . $this->tiempoConversacion;
        }
    }

?>