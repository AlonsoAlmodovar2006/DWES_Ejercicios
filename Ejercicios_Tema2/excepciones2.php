<?php
/* Define una clase de excepción personalizada llamada EdadInvalidaException. Crea una función verificarEdad($edad) que:
• Lance una EdadInvalidaException si la edad es negativa o menor de 18 años.
• Devuelva un mensaje de acceso permitido si la edad es válida.
En el programa principal, prueba con varias edades dentro de un bloque try...catch...finally. */
class EdadInvalidaException extends Exception {}

function verificarEdad($edad){
    if ($edad < 18){
        throw new EdadInvalidaException("No puedes pasar por ser menor de 18 años");
    }else{
        echo "Acceso permitido";
    }
}

try {
    verificarEdad(16);
} catch (EdadInvalidaException $e){
    echo "!Excepción! La excepción ocurrida es --> " . $e->getMessage();
} finally{
    echo "\nFin del programa";
}