<?php
/* Modifica la clase Libro para que use un constructor (__construct) que reciba los valores de titulo, autor y anio.
Agrega un destructor (__destruct) que muestre un mensaje cunado un objeto se destruya. */
class Libro {
    public $titulo;
    public $autor;
    public $anio;

    public function __construct($titulo, $anio, $autor){
        $this->titulo = $titulo;
        $this->anio = $anio;
        $this->autor = $autor;
    }

    public function __destruct(){
        echo "Objeto destruido\n";
    }

    public function mostrarInfo(){
        echo $this->titulo . " (" . $this->anio . ") - " . $this->autor . "\n";
    }
}

$miLibro = new Libro("El Tesoro de David", 1865, "Charles Spurgeon");
$miLibro->mostrarInfo();

$miLibro2 = new Libro("Oliver Twist",1838, "Charles Dickens");
$miLibro2->mostrarInfo();