<?php

/**
 * @author Alvaro Pardo
 * Ej1UD9 - Incidencia.php
 */ 

require_once __DIR__ . "/../traitDB.php"; // Incluimos el trait para manejar la base de datos

class Incidencia
{
    use traitDB; // Usamos el trait para manejar la conexión y operaciones con la base de datos

    // Propiedades de la incidencia
    private static $codigoInc = 1;
    private $codigo;
    private $estado;
    private $puesto;
    private $problema;
    private $resolucion;
    static $numPendientes = 0;

    // Constantes para los estados de la incidencia
    const ESTADO_PENDIENTE = "Pendiente";
    const ESTADO_RESUELTA = "Resuelta";

    // Constructor privado para evitar instanciación directa
    private function __construct($puesto, $problema)
    {
        $this->codigo = self::$codigoInc;
        $this->estado = "Pendiente";
        $this->puesto = $puesto;
        $this->problema = $problema;
        self::$numPendientes++;
        self::$codigoInc++;

    }

    // Método estático para crear una incidencia
    public static function creaIncidencia($puesto, $problema)
    {
        // Generar un código único para la incidencia
        $codigo = self::$codigoInc;

        // Estado inicial: Pendiente
        $estado = self::ESTADO_PENDIENTE;

        // Resolución inicial: vacía
        $resolucion = "";

        // Insertar la incidencia en la base de datos
        $sql = "INSERT INTO INCIDENCIA (CODIGO, ESTADO, PUESTO, PROBLEMA, RESOLUCION) 
                VALUES (:codigo, :estado, :puesto, :problema, :resolucion)";
        $parametros = [
            ':codigo' => $codigo,
            ':estado' => $estado,
            ':puesto' => $puesto,
            ':problema' => $problema,
            ':resolucion' => $resolucion
        ];
        self::queryPreparadaDB($sql, $parametros);

        // Retornar una nueva instancia de Incidencia
        return new self($codigo, $estado, $puesto, $problema, $resolucion);
    }

    // Método para resolver una incidencia
    public function resuelve($resolucion)
    {
        $this->estado = self::ESTADO_RESUELTA;
        $this->resolucion = $resolucion;

        // Actualizar la base de datos
        $sql = "UPDATE INCIDENCIA SET ESTADO = :estado, RESOLUCION = :resolucion WHERE CODIGO = :codigo";
        $parametros = [
            ':estado' => $this->estado,
            ':resolucion' => $this->resolucion,
            ':codigo' => $this->codigo
        ];
        self::$numPendientes--;
        self::queryPreparadaDB($sql, $parametros);
    }

    // Método para obtener el número de incidencias pendientes
    public static function getPendientes()
    {
        $sql = "SELECT COUNT(*) AS pendientes FROM INCIDENCIA WHERE ESTADO = :estado";
        $parametros = [':estado' => self::ESTADO_PENDIENTE];
        $resultado = self::queryPreparadaDB($sql, $parametros);
        return self::$numPendientes;
    }

    // Método para leer una incidencia por su código
    public static function leeIncidencia($codigo)
    {
        $sql = "SELECT * FROM INCIDENCIA WHERE CODIGO = :codigo";
        $parametros = [':codigo' => $codigo];
        $resultado = self::queryPreparadaDB($sql, $parametros);
        
        if (!empty($resultado) && isset($resultado[0])) {
            $incidencia = $resultado[0];
            $salida = "Incidencia " . $incidencia['CODIGO'] . " - Puesto: " . $incidencia['PUESTO'] . ", Problema: " . $incidencia['PROBLEMA'] . ", Estado: " . $incidencia['ESTADO'] . ", Resolución: " . ($incidencia['RESOLUCION'] . "\n"?? '');
            echo $salida;
        }
        return "No se encontró la incidencia con código " . $codigo;
    }

    // Método para leer todas las incidencias
    public static function leeTodasIncidencias()
    {
        $sql = "SELECT * FROM INCIDENCIA";
        $resultado = self::queryPreparadaDB($sql, []);
        
        $salida = "";
        foreach ($resultado as $incidencia) {
            $salida .= "Incidencia " . $incidencia['CODIGO'] . " - Puesto: " . $incidencia['PUESTO'] . ", Problema: " . $incidencia['PROBLEMA'] . ", Estado: " . $incidencia['ESTADO'] . ", Resolución: " . ($incidencia['RESOLUCION'] ?? '') . "\n";
        }
        echo $salida ?: "No hay incidencias registradas";
    }

    // Método para actualizar una incidencia
    public function actualizaIncidencia($estado, $problema, $resolucion, $puesto)
    {
        $this -> setEstado($estado);
        $this -> setProblema($problema);
        $this -> setResolucion($resolucion);
        $this -> setPuesto($puesto);
        // Actualizar la base de datos
        $sql = "UPDATE INCIDENCIA SET ESTADO = :estado, PROBLEMA = :problema, RESOLUCION = :resolucion, PUESTO = :puesto WHERE CODIGO = :codigo";
        $parametros = [
            ':estado' => $this->getEstado(),
            ':problema' => $this->getProblema(),
            ':resolucion' => $this->getResolucion(),
            ':puesto' => $this->getPuesto(),
            ':codigo' => $this->getCodigo()
        ];
        self::queryPreparadaDB($sql, $parametros);
        echo "Incidencia actualizada\n";
    }

    public function borraIncidencia()
    {
        $sql = "DELETE FROM INCIDENCIA WHERE CODIGO = :codigo";
        $parametros = [':codigo' => $this->getCodigo()];
        self::queryPreparadaDB($sql, $parametros);
    }

    public function __toString()
    {
        return "Incidencia {$this->getCodigo()} - Puesto: {$this->getPuesto()}, Problema: {$this->getProblema()}, Estado: {$this->getEstado()}, Resolución: {$this->getResolucion()}\n";
    }

    // Getters
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getPuesto(){
        return $this->puesto;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getProblema(){
        return $this->problema;
    }
    public function getResolucion(){
        return $this->resolucion;
    }

    // Setters
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function setPuesto($puesto){
        $this->puesto = $puesto;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function setProblema($problema){
        $this->problema = $problema;
    }
    public function setResolucion($resolucion){
        $this->resolucion = $resolucion;
    }
    

    
}