<?php 
/* Define una funcion anonima en una variable $multiplicar que multiplique dos numeros.
Llama a la funcion usando $multiplicar(3,4) */
$multiplicar = function ($n1,$n2) {
    return $n1 * $n2;
};

echo $multiplicar(3,4);