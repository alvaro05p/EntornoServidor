<?php 

require_once "Vehiculo.php";

    class Coche extends Vehiculo{

        public function __construct()
        {
            parent::__construct();
        }

        public function llenarDeposito(){
            return "Llenando depósito glu, glu, glu...";
        }

        public function quemaRueda(){
            return "Quemando rueda run, run...";
        }

        public function verKMRecorridos(){
            return "Kilómetros recorridos por el coche: " . $this->km;

        }

    }

?>