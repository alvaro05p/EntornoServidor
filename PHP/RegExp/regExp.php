<?php

    // a)Teléfonos fijos de Valencia (96 seguido de 7 dígitos)
    $expresionA = '/^96[0-9]{7}$/';

    // b)Códigos postales de la Comunidad Valenciana (03XXX, 12XXX, 46XXX)
    $expresionB = '/^(03|12|46)[0-9]{3}$/';

    // c)Teléfonos móviles (6 o 7 seguido de 8 dígitos)
    $expresionC = '/^[67][0-9]{8}$/';

    // d)NIF (8 dígitos seguido de una letra)
    $expresionD = '/^[0-9]{8}[A-Z]$/';

    // e)Fecha en formato dd/mm/aaaa o dd-mm-aaaa
    $expresionE = '/^\d{2}[-\/\.]\d{2}[-\/\.]\d{4}$/';

    // f)Cadena "aprobado" (mayúsculas o minúsculas)
    $expresionF = '/^aprobado$/i';

    // g)Cadena que contiene "aprobado" en minúsculas
    $expresionG = '/aprobado/';

    // h)Cadena que contiene "aprobado" en mayúsculas o minúsculas
    $expresionH = '/aprobado/i';

    // i)Letras mayúsculas/minúsculas y espacios
    $expresionI = '/^[a-zA-Z ]+$/';

    // j)Solo números, sin espacios
    $expresionJ = '/^\d+$/';

    // k)Números con espacios
    $expresionK = '/^[0-9 ]+$/';

    // l)Texto en blanco, números, mayúsculas/minúsculas y caracteres acentuados
    $expresionL = '/^[a-zA-Z0-9 áéíóúÁÉÍÓÚüÜñÑ]+$/';

    // m)Caso anterior con signos de puntuación
    $expresionM = '/^[a-zA-Z0-9 áéíóúÁÉÍÓÚüÜñÑ\'",;:\-.]+$/';

    // n)Dirección de email
    $expresionN = '/^[\w._%+-]+@[\w.-]+\.[a-zA-Z]{2,}$/';

    // o)URL sencilla
    $expresionO = '/^http:\/\/www\.[\w.-]+\/[\w?=&]*$/';

    // p)Contraseña con al menos una minúscula, una mayúscula, un número y mínimo 6 caracteres
    $expresionP = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/';

    // q)IPv4
    $expresionQ = '/^([0-9]{1,3}\.){3}[0-9]{1,3}$/';

    // r)MAC separada por ":"
    $expresionR = '/^([0-9A-F]{2}:){5}[0-9A-F]{2}$/i';

    // s)MAC separada por "-"
    $expresionS = '/^([0-9A-F]{2}-){5}[0-9A-F]{2}$/i';

    // t)Matrícula de vehículo española
    $expresionT = '/^\d{4}[ -]?[A-Z]{3}$/';

    $fijo = "964324568";
    if(preg_match($expresionA, $fijo)){
        echo "El fijo está bien \n";
    }else{
        echo "El fijo está mal \n";
    }

    $postal = "463423"; //Este esta mal (demasiado largo)
    if(preg_match($expresionB, $postal)){
        echo "El código postal está bien \n";
    }else{
        echo "El código postal está mal \n";
    }

    $tel = "643234568"; 
    if(preg_match($expresionC, $tel)){
        echo "El telefono está bien \n";
    }else{
        echo "El telefono está mal \n";
    }

    $dni = "456346554"; //Este está mal (debe acabar con una letra)
    if(preg_match($expresionD, $dni)){
        echo "El dni está bien \n";
    }else{
        echo "El dni está mal \n";
    }

    $fecha = "12/12/23";
    if(preg_match($expresionE, $fecha)){
        echo "La fecha está bien \n";
    }else{
        echo "La fecha está mal \n";
    }

    //Aprobado (mal)
    $cadena = "Aprobada";
    if(preg_match($expresionF, $cadena)){
        echo "Aprobado correcto \n";
    }else{
        echo "Aprobado incorrecto \n";
    }

    //Aprobado en minusculas (bien)
    $cadena = "aprobado";
    if(preg_match($expresionG, $cadena)){
        echo "Aprobado correcto \n";
    }else{
        echo "Aprobado incorrecto \n";
    }

    //Aprobado en mayusculas o minusculas (bien)
    $cadena = "Aprobado";
    if(preg_match($expresionH, $cadena)){
        echo "Aprobado correcto \n";
    }else{
        echo "Aprobado incorrecto \n";
    }

    //Mayusculas, minusculas, espacios(mal, lleva un número)
    $letras = "Hola que tal 5";
    if(preg_match($expresionI, $letras)){
        echo "Cadena correcta \n";
    }else{
        echo "La cadena no debe llevar números ni simbolos \n";
    }

    //Solo números
    $numeros = "2938745";
    if(preg_match($expresionJ, $numeros)){
        echo "Números correctos \n";
    }else{
        echo "Números incorrectos \n";
    }

    //Solo números con espacios (mal)
    $numeros = "2938745";
    if(preg_match($expresionK, $numeros)){
        echo "Números con espacios correctos \n";
    }else{
        echo "Números con espacios incorrectos \n";
    }

    //Solo números con espacios (mal)
    $numeros = "2938745";
    if(preg_match($expresionK, $numeros)){
        echo "Números con espacios correctos \n";
    }else{
        echo "Números con espacios incorrectos \n";
    }

    //Texto en blanco, números, mayúsculas/minúsculas y caracteres acentuados
    $texto = "Hola que tal 1234";
    if(preg_match($expresionL, $numeros)){
        echo "Texto correcto \n";
    }else{
        echo "Texto incorrecto \n";
    }

    //Texto con signos de puntuacón
    $puntuacion = "Este texto, esta: bien";
    if(preg_match($expresionM, $puntuacion)){
        echo "Texto correcto \n";
    }else{
        echo "Texto incorrecto \n";
    }

    $email = "correo@dominio.com";
    if(preg_match($expresionN, $email)){
        echo "El email está bien \n";
    }else{
        echo "El email está mal \n";
    }

    $url = "http://www.ejemplo.com";
    if(preg_match($expresionO, $url)){
        echo "La URL está bien \n";
    }else{
        echo "La URL está mal \n";
    }
    
    //Este está mal (sin mayúscula ni número)
    $password = "abcdef"; 
    if(preg_match($expresionP, $password)){
        echo "La contraseña está bien \n";
    }else{
        echo "La contraseña está mal \n";
    }

    $ipv4 = "192.168.1.1";
    if(preg_match($expresionQ, $ipv4)){
        echo "La IPv4 está bien \n";
    }else{
        echo "La IPv4 está mal \n";
    }

    $mac = "01:23:45:67:89:AB";
    if(preg_match($expresionR, $mac)){
        echo "La MAC con : está bien \n";
    }else{
        echo "La MAC con : está mal \n";
    }

    //Este está mal (falta un bloque)
    $mac = "01-23-45-67-89"; 
    if(preg_match($expresionS, $mac)){
        echo "La MAC con - está bien \n";
    }else{
        echo "La MAC con - está mal \n";
    }

    $matricula = "1234 ABC"; //Este está bien
    if(preg_match($expresionT, $matricula)){
        echo "La matrícula está bien \n";
    }else{
        echo "La matrícula está mal \n";
    }

?>
