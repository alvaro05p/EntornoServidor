<?php
class Incidencia{
    // Declaración de una propiedad
    private static $contador = 1;
    private static $pendientes = 0;

    private $codigo;
    private $puesto;
    private $problema;
    private $estado;
    private $solucion;

    public function __construct($puesto, $problema)
    {
        $this->codigo = self::$contador++;
        $this->puesto = $puesto;
        $this->problema = $problema;
        $this->estado = "pendiente";
        $this->solucion = "";
        self::$pendientes++;

    }

    // Declaración de un método
    public function resuelve($solucion) {
        if($this->estado === "pendiente"){
            $this->estado = "resuelta";
            $this->solucion = $solucion;
            self::$pendientes--;
        }
    }

    public function __toString(){
        $info = "\nIncidencia: " . $this->codigo . " Puesto: " . $this->puesto . " Problema: " . $this->problema . " Estado: " . $this->estado . "\n";
    
        if ($this->estado === "resuelta") {
            $info .= " - Solución: {$this->solucion}";
        }

        return $info . "\n";

    }

    public static function getPendientes(){
        return self::$pendientes . "\n";
    }
}
?> 