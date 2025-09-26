<?php
/* Crea una clase Revista que herede de Libro y tenga además la propiedad numeroEdicion.
Sobrescribe el método mostrarInfo() para incluir la edición*/
class Libro
{
    public $titulo;
    public $autor;
    public $anio;

    public function __construct($titulo, $anio, $autor)
    {
        $this->titulo = $titulo;
        $this->anio = $anio;
        $this->autor = $autor;
    }

    public function __destruct()
    {
        echo "Objeto destruido\n";
    }

    public function mostrarInfo()
    {
        echo $this->titulo . " (" . $this->anio . ") - " . $this->autor . "\n";
    }
}

class Revista extends Libro {
    public $numeroEdicion;

    public function __construct($titulo, $anio, $autor, $numeroEdicion){
        parent::__construct($titulo, $anio, $autor);
        $this->numeroEdicion = $numeroEdicion;
    }

    public function mostrarInfo() {
        echo $this->titulo . " (" . $this->anio . ") - " . $this->autor . ". Edición: " . $this->numeroEdicion . "\n";
    }
}

$miLibro = new Libro("El Tesoro de David", 1865, "Charles Spurgeon");
$miLibro->mostrarInfo();

$miLibro2 = new Libro("Oliver Twist", 1838, "Charles Dickens");
$miLibro2->mostrarInfo();

$miRevista = new Revista("Hola", 2025, "Hola S.L", 4234 );
$miRevista->mostrarInfo();
