<?php
/*Escribe una funcion crearMultiplicador($factor) que devuelva una funcion anonima que multiplique cualquier numero por $factor
Ejemplo: $por2 = crearMultiplicador(2); echo $por2(5); //10 */
function crearMultiplicador($factor){
    return function ($numero) use ($factor){
        return $factor * $numero;
    };
};

$por2 = crearMultiplicador(2);
echo $por2(5);