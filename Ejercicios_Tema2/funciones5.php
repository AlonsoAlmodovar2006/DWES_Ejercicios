<?php
/* Usa Array_filter con una función flecha para obtener de un array de números sólo los pares*/
$numeros = [1,2,3,4,5];
$pares = array_filter($numeros, fn($var) => $var % 2 === 0);
print_r($pares);