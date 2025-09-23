<?php
/* Crea una función calcularPromedio($numeros) que reciba un array y devuelva el promedio.
Usa la función y guarda el resultado en una variable - Usa tipos de datos*/
$numeros = [1, 2, 3, 4, 5];
$promedio = 0.0;
$promedio2;
function calcularPromedio(array $numeros) {
    $suma = 0;
    
    for ($i = 0; $i < count($numeros); $i++){
        $suma += $numeros[$i];
    }

    return $suma / count($numeros);
}

$promedio = calcularPromedio($numeros);
echo "El promedio1 es: " . $promedio;

$promedio2 = function($numeros){
    $suma = 0;
    
    for ($i = 0; $i < count($numeros); $i++){
        $suma += $numeros[$i];
    }
    $promedio = $suma / count($numeros);
    return $promedio;
};
echo "\n" . $promedio2($numeros);

$promedio3 = fn($numeros) => (calcularPromedio($numeros));
echo "\n" . $promedio3($numeros);