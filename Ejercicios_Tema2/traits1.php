<?php
/* Crea una clase libro con las propiedades: titulo, autor y anio. 
Define un método mostrarInfo() que imprima la información del libro.
Instancia 2 objetos de la clase Libro y muestra su información */
class Libro {
    public $titulo;
    public $autor;
    public $anio;

    public function mostrarInfo($titulo, $anio, $autor){
        echo $titulo . " (" . $anio . ") - " . $autor;
    }
}

$miLibro = new Libro();
$miLibro->titulo = "El Tesoro de David";
$miLibro->autor = "Charles Spurgeon";
$miLibro->anio = 1865;
$miLibro->mostrarInfo($miLibro->titulo, $miLibro->anio, $miLibro->autor);

$miLibro2 = new Libro();
$miLibro2->titulo = "\nOliver Twist";
$miLibro2->autor = "Charles Dickens";
$miLibro2->anio = 1838;
$miLibro2->mostrarInfo($miLibro2->titulo, $miLibro2->anio, $miLibro2->autor);