<?php
/* Adivina el Número. Escribe un script que:
• Genere un número aleatorio entre 1 y 100.
• Permita al usuario intentar adivinar el número.
• Guíe al usuario si el número es mayor o menor en cada intento.
• Finalice cuando el usuario acierte el número. */ 
$aleatorio = rand(0,100);
$consola = 101;
$nIntentos = 0;
do {
    echo "Dame un número: ";
    $consola = trim(fgets(STDIN));
    $nIntentos++;
    if ($consola > $aleatorio) {
        echo $consola . " es mayor \n";
    } elseif ($consola < $aleatorio) {
        echo $consola . " es menor \n";
    } else {
        echo "Enhorabuena!!!";
    }
} while ($aleatorio != $consola);
echo "\nEl número de intentos es: " . $nIntentos;