<?php

    class Vehiculo{
        static $creadosTotal = 0;
        static $kmTotal = 0;
        public $km=0;

        public function __construct(){
            self::$creadosTotal++;
        }

        public static function verVehiculosCreados(){
            return self::$creadosTotal;
        }

        public function avanza($kmAvanzados){
            self::$kmTotal+=$kmAvanzados;
            $this->km+=$kmAvanzados;
        }

        public function verKMRecorridos(){
            return $this->km;
        }

        public static function verKMTotales(){
            return self::$kmTotal;
        }
    }
?>