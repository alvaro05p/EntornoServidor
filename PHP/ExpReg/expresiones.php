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



?>
