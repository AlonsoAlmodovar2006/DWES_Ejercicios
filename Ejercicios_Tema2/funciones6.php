<?php
/* Calculadora básica: 
Crea una función para cada operación matemática básica (Suma,resta, multiplicación, división).
Cada función debe aceptar dos números como parámetros y devolver el resultado.
Crea funciones "normales", anónimas y flecha para las operaciones.*/
echo "Estamos en una calculadora. ¡Bienvenido!\n";

do {
    echo "Dame el primer número: ";
    $input = trim(fgets(STDIN));
    if (!is_numeric($input)) {
        echo "No has puesto un número válido\n";
        $n1 = null;
    } else {
        $n1 = floatval($input);
    }
} while ($n1 === null);

do {
    echo "Dame el segundo número: ";
    $input = trim(fgets(STDIN));
    if (!is_numeric($input)) {
        echo "No has puesto un número válido\n";
        $n2 = null;
    } else {
        $n2 = floatval($input);
    }
} while ($n2 === null);
$opcion = 0;

do {
    echo "1. Suma \n2. Restar \n3. Multiplicar \n4. Dividir \n5. Salir \nDame la opción que quieres hacer: ";
    $opcion = intval(trim(fgets(STDIN)));
    $resultado = null;
    switch ($opcion){
        case 1: 
            $resultado = sumar($n1,$n2);
            echo "El resultado de la operación es: " . $resultado . "\n";
            break;
        case 2: 
            $funcion = function($n1,$n2) {
                return $n1-$n2;
            };
            $resultado = $funcion($n1,$n2);
            echo "El resultado de la operación es: " . $resultado . "\n";
            break;
        case 3: 
            $funcion = fn($a, $b) => $a * $b;
            $resultado = $funcion($n1, $n2);
            echo "El resultado de la operación es: " . $resultado . "\n";
            break;
        case 4:
            $resultado = dividir($n1,$n2);
            echo "El resultado de la operación es: " . $resultado . "\n";
            break;
        case 5: 
            echo "¡Adiós!";
            break;
        default:
            echo "Tiene que ser un número entre 1 y 5 para que haga algo \n";
            break;
    }
}while ($opcion!=5);

function sumar($n1,$n2){
    return $n1 + $n2;
}

function dividir($n1,$n2){
    if ($n2 == 0){
        echo "No se puede dividir por 0\n";
        return "ERROR";
    }else{
        return $n1 / $n2;
    }
}