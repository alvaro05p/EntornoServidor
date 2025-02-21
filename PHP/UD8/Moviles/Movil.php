<?php

    include "Terminal.php";

    class Movil extends Terminal{

        /**
         * @author Álvaro Pardo Perlta
         */

        private $tarifa;
        private $costeTotal;

        public function __construct($numero, $tarifa){
            parent::__construct($numero);
            $this->tarifa = $tarifa;
            $this->costeTotal = 0;
        }

        public function llama($terminal, $segundosDeLlamada){
            $this->tiempoConversacion += $segundosDeLlamada;
            $terminal->tiempoConversacion += $segundosDeLlamada;

            $tarifas = ["rata" => 0.001, "mono" => 0.002, "bisonte" => 0.005];

            if (isset($tarifas[$this->tarifa])) {
                $this->costeTotal += $segundosDeLlamada * $tarifas[$this->tarifa];
            }

        }

        public function __toString()
        {
            return "Tarifa: " . $this->tarifa . " Coste: " . $this->costeTotal;
        }
    

    }
?>