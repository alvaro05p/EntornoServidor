<?php

require_once __DIR__ . "/db.php"; // Asegúrate de que este archivo contiene las constantes correctas.

trait traitDB{
    
    public static function connectDB()
    {
        try {
            // Corregir el DSN y usar la constante correcta para el nombre de la base de datos
            $dsn = "mysql:host=" . HOST . ";dbname=INCIDENCIAS" . ";charset=utf8mb4";
            $conn = new PDO($dsn, MYSQL_ROOT, MYSQL_ROOT_PASSWORD);
            
            // Configurar el modo de error de PDO a excepción
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conn;
        } catch (PDOException $e) {
            die("Conexión fallida: " . $e->getMessage());
        }
    }

    public function execDB($sql)
    {
        try {
            $conn = self::connectDB();
            $affectedRows = $conn->exec($sql);
            return $affectedRows;
        } catch (PDOException $e) {
            die("Error al ejecutar la consulta: " . $e->getMessage());
        }
    }

    public static function queryPreparadaDB($sql, $parametros = [])
    {
        try {
            $conn = self::connectDB();
            $stmt = $conn->prepare($sql);
            $stmt->execute($parametros);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error en la consulta preparada: " . $e->getMessage());
        }
    }

    public static function resetearBD()
    {
        try {
            $conn = self::connectDB();
            
            // Eliminar todas las filas de la tabla INCIDENCIA
            $sql = "DELETE FROM INCIDENCIA";
            $conn->exec($sql);
            
        } catch (PDOException $e) {
            die("Error al resetear la base de datos: " . $e->getMessage());
        }
    }
}
