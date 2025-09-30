<?php
/* Manejo de directorios
 - Crea un directorio mis_archivos con mkdir
 - Dentro, crea algunos archivos de prueba (archivo1.txt, archivo2.txt) 
 - Lista todos los archivos con scandir y muestra los nombres por pantalla 
 - Borra uno de los archivos con unlink y finalmente elimina la carpeta con rmdir*/
$directorio = "./mis_archivos";
mkdir($directorio);

$archivo1 = fopen("$directorio/archivo1.txt", "w+");
fwrite($archivo1, "Hola soy el archivo 1");
fclose($archivo1);
$archivo2 = fopen("$directorio/archivo2.txt", "w+");
fwrite($archivo2, "Hola soy el archivo 2");
fclose($archivo2);

print_r(scandir($directorio));

unlink("$directorio/archivo1.txt");
//Para borrar la carpeta tengo que también borrar el archivo2
unlink("$directorio/archivo2.txt");

rmdir($directorio);