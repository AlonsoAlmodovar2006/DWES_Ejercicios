<?php
/*Crea una función dividir($a, $b) que devuelva el resultado de dividir dos números. Si el divisor es 0, debe lanzar una excepción.
En el programa principal, usa un bloque try...catch...finally para:
• Intentar dividir varios números.
• Capturar y mostrar un mensaje de error si ocurre una excepción.
• Mostrar un mensaje final indicando que la operación terminó. */
function dividir($n1,$n2){
    if ($n2 == 0){
        throw new Exception("No se puede dividir por 0");
    }
    return "El resultado es " . $n1 / $n2;
}

try{
    echo dividir(5,0);
} catch (Exception $e){
    echo "La excepción ocurrida es: " . $e->getMessage();
} finally{
    echo "\nFin del programa";
}
