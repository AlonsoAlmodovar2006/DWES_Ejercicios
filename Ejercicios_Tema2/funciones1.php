<?php
/* Declara una variable $contador = 0 fuera de la función y una función incrementar que aumente $contador.
Hazlo primero con global $contador.
Luego con $GLOBALS['contador'].
Hazlo de forma que incrementar($contador) reciba el contador como parámetro y devuelva el nuevo valor. */

$contador = 0;

function incrementar(){
    global $contador;
    $contador++;
    echo "El contador1 ha incrementado a " . $contador;
}

function incrementar2(){
    $GLOBALS['contador']++;
    echo "\nEl contador2 ha incrementado a " . $GLOBALS['contador'];
}

function incrementar3($contador){
    $contador++;
    return "\nEl contador3 ha incrementado a " . $contador;
}

incrementar();
incrementar2();
echo incrementar3($contador);