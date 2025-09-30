<?php
/* Crea un archivo de texto frutas.txt con varias líneas (una fruta por línea).
Escribe un script que:
 - Verifique si el archivo es legible (is_readable) antes de abrirlo
 - Abra el archivo en modo lectura (r)
 - Lea todo el contenido usando fread y lo muestre por pantalla.
 - Vuelva a abrir el archivo y lea solo la 1ª línea usando fgets.
 - Cierra el archivo con fclsoe */

$archivoFrutas = "frutas.txt";

if (is_readable($archivoFrutas)){
    echo "Sí, $archivoFrutas se puede leer\n";

    $archivoAbierto = fopen($archivoFrutas, "r" );

    $leerEntero = fread($archivoAbierto, filesize($archivoFrutas));
    echo $leerEntero . "\n";

    fclose($archivoAbierto);

    $archivoAbierto2 = fopen($archivoFrutas, "r" );

    $linea = fgets($archivoAbierto2);
    echo "La primera línea es: $linea";

    fclose($archivoAbierto2);
} else{
    echo "No, $archivoFrutas no se puede leer";
}