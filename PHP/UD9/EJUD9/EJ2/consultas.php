<?php
/**
 * @autor Álvaro Pardo
 * Ejercicio 2. Consultas
 */


    require_once("../db.php");

    try {
        $conexion = new PDO("mysql:host=".HOST.";dbname=EMPRESA;charset=utf8", MYSQL_ROOT, MYSQL_ROOT_PASSWORD);
        // Habilitar el modo de errores de PDO
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa\n";
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }

    if (isset($_POST["tipoConsulta"])) {
        $consulta = $_POST["tipoConsulta"];
    } else {
        $consulta = null;
    }

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Conecta a la base de datos (ajusta los detalles de la conexión según tu configuración)
    
    // Determina el tipo de consulta

    switch ($consulta) {
            //consultas de Clientes
        case 'ClientePorDni':
            //Datos de cliente por DNI
            $sql = "SELECT * FROM CLIENTE WHERE DNI LIKE :dni";
            $stmt = $conexion->prepare($sql);

            // Enlazamos el parámetro
            $stmt->bindParam(':dni', $_POST["dni"], PDO::PARAM_STR);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($resultado);
            
            break;

        case 'ListadoClientes':
            //Listado de todos los clientes ordenados por dni de cliente
            $sql = "SELECT * FROM CLIENTE";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ClientesDadapoblacion':
            //Datos de Clientes de una Población seleccionada ordenados por dni de cliente
            $sql = "SELECT * FROM CLIENTE WHERE DNI LIKE :dni";
            $stmt = $conexion->prepare($sql);

            // Enlazamos el parámetro
            $stmt->bindParam(':dni', $_POST["dni"], PDO::PARAM_STR);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;
        
        case 'ListadoClientesPorPoblacion':
            //Listado de Clientes de una población seleccionada ordenados por población
            $sql = "SELECT * FROM CLIENTE WHERE POBLACION LIKE :poblacion ORDER BY POBLACION";
            $stmt = $conexion->prepare($sql);

            // Enlazamos el parámetro
            $stmt->bindParam(':poblacion', $_POST["poblacion"], PDO::PARAM_STR);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'NumeroClientesPorPoblacion':
            //Número de clientes por población
            $sql = "SELECT POBLACION, COUNT(*) AS NUM_CLIENTES FROM CLIENTE GROUP BY POBLACION";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ListadoClientesConCompras':
            //Datos de Clientes que han realizado compras ordenados por dni de cliente
            $sql = "SELECT DISTINCT C.* FROM CLIENTE C
                    INNER JOIN COMPRA CO ON C.DNI = CO.CLIENTE
                    ORDER BY C.DNI";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ListadoClientesSinCompras':
            //Datos de Clientes que no han realizado compras ordenados por dni de cliente
            $sql = "SELECT * FROM CLIENTE C
                    WHERE NOT EXISTS (SELECT 1 FROM COMPRA CO WHERE CO.CLIENTE = C.DNI)
                    ORDER BY C.DNI";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ListadoClientesConComprasDadaPoblacion':
            //Datos de Clientes que han realizado compras de una población seleccionada ordenados por dni de cliente
            $sql = "SELECT DISTINCT C.* FROM CLIENTE C
                    INNER JOIN COMPRA CO ON C.DNI = CO.CLIENTE
                    WHERE C.POBLACION LIKE :poblacion
                    ORDER BY C.DNI";
            $stmt = $conexion->prepare($sql);

            // Enlazamos el parámetro
            $stmt->bindParam(':poblacion', $_POST["poblacion"], PDO::PARAM_STR);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ListadoClientesSinComprasDadaPoblacion':
            //Datos de Clientes que no han realizado compras de una población seleccionada ordenados por dni de cliente
            $sql = "SELECT * FROM CLIENTE C
                    WHERE C.POBLACION LIKE :poblacion
                    AND NOT EXISTS (SELECT 1 FROM COMPRA CO WHERE CO.CLIENTE = C.DNI)
                    ORDER BY C.DNI";
            $stmt = $conexion->prepare($sql);

            // Enlazamos el parámetro
            $stmt->bindParam(':poblacion', $_POST["poblacion"], PDO::PARAM_STR);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ListadoClientesConComprasValencia':
            //Datos de Clientes que han realizado compras con algún cliente de la población de Valencia ordenados por dni de cliente
            $sql = "SELECT DISTINCT C.* FROM CLIENTE C
                    INNER JOIN COMPRA CO ON C.DNI = CO.CLIENTE
                    WHERE C.POBLACION = 'Valencia'
                    ORDER BY C.DNI";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ListadoClientesConTresOMasCompras':
            //Listado de clientes que han realizado 3 o más compras ordenados por dni de cliente
            $sql = "SELECT C.DNI, C.NOMBRE, C.APELLIDOS, COUNT(*) AS NUM_COMPRAS FROM CLIENTE C
                    INNER JOIN COMPRA CO ON C.DNI = CO.CLIENTE
                    GROUP BY C.DNI
                    HAVING COUNT(*) >= 3
                    ORDER BY C.DNI";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ListadoClientesConTresComprasOMasPorPoblacion':
            //Listado de clientes que han realizado 3 compras o más de una población seleccionada ordenados por dni de cliente
            $sql = "SELECT C.DNI, C.NOMBRE, C.APELLIDOS, COUNT(*) AS NUM_COMPRAS FROM CLIENTE C
                    INNER JOIN COMPRA CO ON C.DNI = CO.CLIENTE
                    WHERE C.POBLACION LIKE :poblacion
                    GROUP BY C.DNI
                    HAVING COUNT(*) >= 3
                    ORDER BY C.DNI";
            $stmt = $conexion->prepare($sql);

            // Enlazamos el parámetro
            $stmt->bindParam(':poblacion', $_POST["poblacion"], PDO::PARAM_STR);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

            // Consultas con proveedores
        case 'ProveedorPorNif':
            //Datos de proveedor por NIF
            $sql = "SELECT * FROM PROVEEDOR WHERE NIF LIKE :nif";
            $stmt = $conexion->prepare($sql);

            // Enlazamos el parámetro
            $stmt->bindParam(':nif', $_POST["proveedor"], PDO::PARAM_STR);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ListadoProveedores':
            //Listado de todos los proveedores ordenados por nif de proveedor
            $sql = "SELECT * FROM PROVEEDOR ORDER BY NIF";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ProveedoresEmpiezanPorTexto':
            //Datos de proveedores que empiezan por un texto seleccionado ordenados por nif de proveedor
            $sql = "SELECT * FROM PROVEEDOR WHERE NOMBRE LIKE :texto ORDER BY NIF";
            $stmt = $conexion->prepare($sql);

            // Enlazamos el parámetro
            $stmt->bindParam(':texto', $_POST["parametro"], PDO::PARAM_STR);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ProveedoresProductosPvpMayor1000':
            //Datos de proveedores con productos con precio mayor a 1000€ ordenados por nif de proveedor
            $sql = "SELECT DISTINCT P.* FROM PROVEEDOR P
                    INNER JOIN PRODUCTO PR ON P.NIF = PR.PROVEEDOR
                    WHERE PR.PVP > 1000
                    ORDER BY P.NIF";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

            // Consultas con productos
        case 'ProductoPorCodProd':
            //Datos de producto por COD_PROD
            $sql = "SELECT * FROM PRODUCTO WHERE COD_PROD LIKE :cod_prod";
            $stmt = $conexion->prepare($sql);

            // Enlazamos el parámetro
            $stmt->bindParam(':cod_prod', $_POST["producto"], PDO::PARAM_STR);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ListadoProductos':
            //Listado de todos los productos ordenados por codigo de producto
            $sql = "SELECT * FROM PRODUCTO ORDER BY COD_PROD";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ProductosPvpMenorOIgual100':
            //Datos de productos con precio menor a 100 ordenados por codigo de producto
            $sql = "SELECT * FROM PRODUCTO WHERE PVP <= 100 ORDER BY COD_PROD";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'ProductosPVPMayorPromedio':
            //Productos con precio mayor al promedio ordenados por codigo de producto
            $sql = "SELECT * FROM PRODUCTO WHERE PVP > (SELECT AVG(PVP) FROM PRODUCTO) ORDER BY COD_PROD";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'PvpMaximoProductos':
            //PVP máximo de los productos
            $sql = "SELECT MAX(PVP) AS PVP_MAXIMO FROM PRODUCTO";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'PvpMinimoProductos':
            //PVP mínimo de los productos
            $sql = "SELECT MIN(PVP) AS PVP_MINIMO FROM PRODUCTO";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;

        case 'PvpPromedioProductos':
            //PVP promedio de los productos
            $sql = "SELECT AVG(PVP) AS PVP_PROMEDIO FROM PRODUCTO";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo json_encode($resultados);
            
            break;
    }
    
    
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Ejercicios Consulta</title>
</head>

<body>
    <h1>Consultas de la BD Empresa</h1>
    <form action="consultas.php" method="post">
        <label for="tipoConsulta">Tipo de consulta:</label>
        <select name="tipoConsulta" id="tipoConsulta">
            <option value="ClientePorDni">Cliente dado dni</option>
            <option value="ListadoClientes">Listado clientes</option>
            <option value="ClientesDadapoblacion">Clientes de una población</option>
            <option value="ListadoClientesPorPoblacion">Listado de clientes por población</option>
            <option value="NumeroClientesPorPoblacion">Número de clientes por población</option>
            <option value="ListadoClientesConCompras">Clientes con compras</option>
            <option value="ListadoClientesSinCompras">Clientes sin compras</option>
            <option value="ListadoClientesConComprasDadaPoblacion">Clientes con compras de una población</option>
            <option value="ListadoClientesSinComprasDadaPoblacion">Clientes sin compras de una población</option>
            <option value="ListadoClientesConComprasValencia">Clientes con compras de Valencia</option>
            <option value="ListadoClientesConTresOMasCompras">Clientes con 3 compras o más</option>
            <option value="ListadoClientesConTresComprasOMasPorPoblacion">Clientes con 3 compras o más de una población</option>
            <option value="ProveedorPorNif">Proveedor dado NIF</option>
            <option value="ListadoProveedores">Listado de proveedores</option>
            <option value="ProveedoresEmpiezanPorTexto">Proveedores que empiezan por un texto</option>
            <option value="ProveedoresProductosPvpMayor1000">Proveedores con productos con precio mayor a 1000€</option>
            <option value="ProductoPorCodProd">Producto dado codigo</option>
            <option value="ListadoProductos">Listado de productos</option>
            <option value="ProductosPvpMenorOIgual100">Productos con precio menor a 100</option>
            <option value="ProductosPVPMayorPromedio">Productos con precio mayor al promedio</option>
            <option value="PvpMaximoProductos">PVP máximo de los productos</option>
            <option value="PvpMinimoProductos">PVP mínimo de los productos</option>
            <option value="PvpPromedioProductos">PVP promedio de los productos</option>
            <option value="ProductosNombreContieneTexto">Productos cuyo nombre contiene un texto</option>
            <option value="ListadoCompras">Listado de compras</option>
            <option value="ComprasDeAnyo">Compras a partir de un año dado</option>
            <option value="ComprasDeCliente">Compras de un cliente dado</option>
            <option value="ComprasDeProducto">Compras de un producto dado</option>
            <option value="ComprasDeProveedor">Compras de un proveedor dado</option>
            <option value="ComprasDePoblacion">Compras de una población dada</option>
            <option value="ComprasDeClientesValencia">Compras con algún cliente de la población de Valencia</option>
            <option value="ComprasConIgualOMasDe2Unidades">Compras con 2 unidades o más</option>
            <option value="ComprasConMasDe3productos">Compras con más de 3 productos</option>
            <option value="ComprasMinimo10Unidades">Compras con un mínimo de 10 unidades</option>
        </select>
        </select>
        <label for="dni">dni:</label>
        <select name="dni" id="dni">
            <?php
                $stmt = $conexion->prepare("SELECT DNI FROM CLIENTE");
                $stmt->execute();
                $dnis = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                // Muestra los dnis en un select
                foreach ($dnis as $dni) {
                    echo "<option value='{$dni['DNI']}'>{$dni['DNI']}</option>";
                }
            ?>
        </select>
        <label for="poblacion">población:</label>
        <select name="poblacion" id="poblacion">
            <?php
                $stmt = $conexion->prepare("SELECT POBLACION FROM CLIENTE");
                $stmt->execute();
                $poblaciones = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($poblaciones as $poblacion) {
                    echo "<option value='{$poblacion['POBLACION']}'>{$poblacion['POBLACION']}</option>";
                }
            ?>
        </select>
        <label for="proveedor">proveedor:</label>
        <select name="proveedor" id="proveedor">
            <?php
            // Conecta a la base de datos (ajusta los detalles de la conexión según tu configuración)
            $stmt = $conexion->prepare("SELECT * FROM PROVEEDOR");
            $stmt->execute();
            $proveedores = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Muestra los proveedors en un select
            foreach ($proveedores as $proveedor) {
                echo "<option value='{$proveedor['NIF']}'>{$proveedor['NIF']}</option>";
            }
            ?>
        </select>
        <label for="producto">producto:</label>
        <select name="producto" id="producto">
            <?php
            // Conecta a la base de datos (ajusta los detalles de la conexión según tu configuración)
            $stmt = $conexion->prepare("SELECT * FROM PRODUCTO");
            $stmt->execute();
            $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Muestra los productos en un select
            foreach ($productos as $producto) {
                echo "<option value='{$producto['COD_PROD']}'>{$producto['COD_PROD']}</option>";
            }
            ?>
        </select>
        <label for="parametro">Parámetro de consulta:</label>
        <input type="text" name="parametro" id="parametro">
        <br>
        <input type="submit" value="Consultar">

</body>

</html>