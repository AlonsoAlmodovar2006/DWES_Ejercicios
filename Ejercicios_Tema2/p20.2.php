<?php
/* Calculadora de promedio. 
Escribe un script en PHP que permita al usuario ingresar una serie de números separados por espacios desde la consola. 
Calcule el promedio de los números ingresados y muestre el resultado.
Usa las funciones */
echo "Dame varios números separados en espacios ";
$cadena = trim(fgets(STDIN));
$separando = explode(" ", $cadena);
$arrayNumeros = array_map("floatval", $separando);
$suma = 0;
foreach ($arrayNumeros as $numero){
    $suma += $numero;
}
$media = $suma / count($arrayNumeros);
echo "El promedio de tus números es: " . $media;

// Si el contador es mayor que 0