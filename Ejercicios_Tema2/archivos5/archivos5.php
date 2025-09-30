<?php
/* Leer y escribir archivos grandes
 - Crea un archivo grande archivo_grande.txt (puedes hacer un bucle que repita una línea)
 - Abre el archivo en modo lectura
 - Lee bloques de 1024 usando fread
 - Luego, lee línea a línea con fgets y cuente el total de líneas */

$archivo = "./archivo_grande.txt";
if(!file_exists($archivo)){
    crearArchivo($archivo);
}
leerArchivoBloques($archivo);
leerArchivoALineas($archivo);

function crearArchivo($archivo)
{
    $archivoNuevo = fopen($archivo, "x");

    for ($i = 0; $i < 5; $i++) {
        fwrite($archivoNuevo, "Hola\n");
    }
    fclose($archivoNuevo);
}

function leerArchivoBloques($archivo){
    $archivoNuevo = fopen($archivo, "r");
    $escritura = fread($archivoNuevo, filesize($archivo));
    echo $escritura;
    fclose($archivoNuevo);
}

function leerArchivoALineas($archivo){
    $archivoNuevo = fopen($archivo, "r");
    $contador = 0;
    while (($linea = fgets($archivoNuevo)) !=false){
        $contador++;
        echo "Línea " . $contador . ": " . $linea;
    }
    fclose($archivoNuevo);
}