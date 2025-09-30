<?php
/* Crear un archivo seguro
 - Intenta crear un archivo nuevo usuarios.txt con fopen en modo x
 - Si el archivo ya existe, ábrelo en modo lectura y escritura (r+) pero antes de abrirlo, verifica permisos con is_writable
 - Añade una nueva línea con un nombre de usuario
 - Finalmente, renombra o mueve el archivo a otra carpeta usando rename */

$archivo = "./usuarios.txt";

if (file_exists($archivo)){
    if(is_writable($archivo)){
        echo "El archivo ya existe\n";

        $archivoNuevo = fopen($archivo, "r+");
        fseek($archivoNuevo, 0, SEEK_END);
        fwrite($archivoNuevo, "Caracola\n");

        $escribiendo = file_get_contents($archivo);
        echo $escribiendo;
        fclose($archivoNuevo);

        rename($archivo, "./usuarias.txt");
    } else{
        echo "El archivo existe pero no se puede escribir";
    }
}else{
    echo "Creando el archivo...";
    $archivoNuevo = fopen($archivo, "x");
    fwrite($archivoNuevo, "Hola\n");
    fclose($archivoNuevo);
}
