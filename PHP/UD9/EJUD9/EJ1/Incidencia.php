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
    private $codigo;
    private $estado;
    private $puesto;
    private $problema;
    private $resolucion;

    // Constantes para los estados de la incidencia
    const ESTADO_PENDIENTE = "Pendiente";
    const ESTADO_RESUELTA = "Resuelta";

    // Constructor privado para evitar instanciación directa
    private function __construct($codigo, $estado, $puesto, $problema, $resolucion)
    {
        $this->codigo = $codigo;
        $this->estado = $estado;
        $this->puesto = $puesto;
        $this->problema = $problema;
        $this->resolucion = $resolucion;
    }

    // Método estático para crear una incidencia
    public static function creaIncidencia($puesto, $problema)
    {
        // Generar un código único para la incidencia
        $codigo = rand(1, 1000);

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
        self::queryPreparadaDB($sql, $parametros);
    }

    // Método para obtener el número de incidencias pendientes
    public static function getPendientes()
    {
        $sql = "SELECT COUNT(*) AS pendientes FROM INCIDENCIA WHERE ESTADO = :estado";
        $parametros = [':estado' => self::ESTADO_PENDIENTE];
        $resultado = self::queryPreparadaDB($sql, $parametros);
        return $resultado[0]['pendientes'];
    }

    // Método para leer una incidencia por su código
    public static function leeIncidencia($codigo)
    {
        $sql = "SELECT * FROM INCIDENCIA WHERE CODIGO = :codigo";
        $parametros = [':codigo' => $codigo];
        return self::queryPreparadaDB($sql, $parametros);
    }

    // Método para leer todas las incidencias
    public static function leeTodasIncidencias()
    {
        $sql = "SELECT * FROM INCIDENCIA";
        return self::queryPreparadaDB($sql, []);
    }

    // Método para actualizar una incidencia
    public function actualizaIncidencia($estado, $problema, $resolucion, $puesto)
    {
        if (!empty($estado)) $this->estado = $estado;
        if (!empty($problema)) $this->problema = $problema;
        if (!empty($resolucion)) $this->resolucion = $resolucion;
        if (!empty($puesto)) $this->puesto = $puesto;

        // Actualizar la base de datos
        $sql = "UPDATE INCIDENCIA SET ESTADO = :estado, PROBLEMA = :problema, RESOLUCION = :resolucion, PUESTO = :puesto WHERE CODIGO = :codigo";
        $parametros = [
            ':estado' => $this->estado,
            ':problema' => $this->problema,
            ':resolucion' => $this->resolucion,
            ':puesto' => $this->puesto,
            ':codigo' => $this->codigo
        ];
        self::queryPreparadaDB($sql, $parametros);
    }

    // Método para borrar una incidencia
    public function borraIncidencia()
    {
        $sql = "DELETE FROM INCIDENCIA WHERE CODIGO = :codigo";
        $parametros = [':codigo' => $this->codigo];
        self::queryPreparadaDB($sql, $parametros);
    }

    // Método mágico para convertir la incidencia a cadena
    public function __toString()
    {
        return "Incidencia {$this->codigo} - Puesto: {$this->puesto}, Problema: {$this->problema}, Estado: {$this->estado}, Resolución: {$this->resolucion}\n";
    }

    // Getter para el código
    public function getCodigo()
    {
        return $this->codigo;
    }
}