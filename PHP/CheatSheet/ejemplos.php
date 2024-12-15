<?php
// Álvaro Pardo Peralta - Ejemplos php

// 1. Pide un nombre y guárdalo
$nombre = readline("Introduce tu nombre: ");

// 2. Concatenación de cadenas
$mensaje = "Hola " . $nombre . ", encantado de conocerte.";

// 3. Saludo con otra línea
$mensaje .= "\n¡Gracias por la visita!";

// 4. Operaciones matemáticas
$num1 = 5;
$num2 = 3;
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;

// 5. Redondeo de un número decimal
$decimal = 7.8;
$resultadoRedondeo = round($decimal);

// 6. Media de varios números
$numeros = [4, 8, 15, 16, 23, 42];
$media = array_sum($numeros) / count($numeros);
$mediaRedondeada = round($media);

// 7. Ordenar tres números
$numeros = [5, 3, 8];
rsort($numeros);
$sonIguales = count(array_unique($numeros)) === 1;

// 8. Determinar quincena
$dia = intval(readline("Introduce el día del mes: "));
$quincena = ($dia <= 15) ? "primera quincena" : "segunda quincena";

// 9. Precio aleatorio
$cantidad = rand(10, 90);

// 10. Número aleatorio entre 1 y 5
$numAleatorio = rand(1, 5);
$nombresNumeros = [1 => "uno", 2 => "dos", 3 => "tres", 4 => "cuatro", 5 => "cinco"];
$nombreNumero = $nombresNumeros[$numAleatorio];

// 11. Conversor de euros a pesetas
$euros = 100;
$pesetas = $euros * 166.386;

// 12. Conversor de pesetas a euros
$pesetas = 1000;
$europesetas = $pesetas / 166.386;

// 13. Determinar tipo de carácter
$caracter = readline("Introduce un carácter: ");
if (ctype_upper($caracter)) {
    $tipo = "mayúscula";
} elseif (ctype_lower($caracter)) {
    $tipo = "minúscula";
} elseif (ctype_digit($caracter)) {
    $tipo = "numérico";
} elseif (ctype_space($caracter)) {
    $tipo = "blanco";
} elseif (ctype_punct($caracter)) {
    $tipo = "puntuación";
} else {
    $tipo = "especial";
}

// 14. Fecha del sistema
$fechaActual = date("Y-m-d H:i:s");
$diaSemana = date("l");

// 15. Conversión de segundos a horas, minutos y segundos
$segundos = 3600;
$horas = floor($segundos / 3600);
$minutos = floor(($segundos % 3600) / 60);
$segundosRestantes = $segundos % 60;

// 16. Validar una hora
$hora = intval(readline("Introduce la hora: "));
$minutos = intval(readline("Introduce los minutos: "));
$segundos = intval(readline("Introduce los segundos: "));
$horaCorrecta = ($hora >= 0 && $hora < 24) && ($minutos >= 0 && $minutos < 60) && ($segundos >= 0 && $segundos < 60);

// 17. Determinar si un número es par y/o divisible entre 3
$numero = intval(readline("Introduce un número: "));
$esPar = ($numero % 2 === 0);
$esDivisiblePorTres = ($numero % 3 === 0);

// 18. Obtener el dígito central de un número
$numero = "12345";
$longitud = strlen($numero);
$centro = ($longitud % 2 === 0) ? substr($numero, ($longitud / 2) - 1, 2) : $numero[$longitud / 2];

// 19. Contar los dígitos de un número
$digitos = strlen($numero);

// 20. Invertir un número
$numeroInvertido = strrev($numero);

// 21. Penúltima cifra de un número
$penultimaCifra = ($longitud >= 2) ? $numero[$longitud - 2] : null;

// 22. Contar números positivos y negativos en una lista
$listaNumeros = [1, -2, 3, -4, 5];
$positivos = array_filter($listaNumeros, fn($n) => $n > 0);
$negativos = array_filter($listaNumeros, fn($n) => $n < 0);

// 23. Salarios de trabajadores
$trabajadores = ["Juan" => 1000, "Ana" => 1200, "Luis" => 800];
$salarioMaximo = max($trabajadores);
$salarioMinimo = min($trabajadores);
$salarioMedio = array_sum($trabajadores) / count($trabajadores);

// 24. Aumento de salarios
$incremento = 0.1; // 10%
$salariosAumentados = array_map(fn($s) => $s * (1 + $incremento), $trabajadores);

?>
