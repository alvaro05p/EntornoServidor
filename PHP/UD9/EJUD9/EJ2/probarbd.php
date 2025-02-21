<?php

    require_once("../db.php");

    try {
        $conexion = new PDO("mysql:host=".HOST.";dbname=EMPRESA;charset=utf8", MYSQL_USER, MYSQL_PASSWORD);
        // Habilitar el modo de errores de PDO
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa";
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }

    
    $stmt = $conexion->prepare("SELECT DNI FROM CLIENTE");
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($resultado);


    

?>