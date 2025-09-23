<?php
/* Transformar un array con funciones anónimas:
Dado un array de nombres, utiliza una función anónima con array_map para:
 - Convertir todos los nombres a mayúsculas
 - Agregar Sr/Sra antes de cada nombre */
$arrayNombres = ["Alonso", "Orwin", "Mikel", "Victor"];
$mayusculas = function($nombre) {        
    $nombre = strtoupper($nombre);
    return $nombre;
};
$primerPaso = array_map($mayusculas, $arrayNombres);
print_r($primerPaso);
$segundoPaso = array_map(function($nombre) {
    return $nombre = "Sr/Sra " . $nombre;
}, $primerPaso);
print_r($segundoPaso);