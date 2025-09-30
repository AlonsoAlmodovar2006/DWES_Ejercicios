<?php
/* Crea un archivo colores.txt vacío:
 - Con fwrite añade tres colores diferentes, una linea por color, usando bloque con flock para evitar conflictos si hay varios procesos escribiendo
 - Muestra el contenido del fichero por pantalla
 - Con file_put_contents sobreescribe el archivo con un nuevo color
 - Muestra su contenido por pantalla */
$archivo = "./colores.txt";

$archivoAbierto = fopen($archivo, "w+");
if ($archivoAbierto){
    echo "Archivo abierto con éxito \n";
    fwrite($archivoAbierto, "Azul \nAmarillo \nMagenta \n");

    $escribiendo = file_get_contents($archivo);
    echo $escribiendo;
    fclose($archivoAbierto);

    
} else {
    echo "Ha habido un error \n";
}
$archivoAbierto2 = fopen($archivo, "w+");

if ($archivoAbierto){
    echo "Archivo abierto con éxito \n";
    file_put_contents($archivo, "Negro\n");
    $sobreescribiendo = file_get_contents($archivo);

    echo $sobreescribiendo;
} else {
    echo "Ha habido un error \n";
}



