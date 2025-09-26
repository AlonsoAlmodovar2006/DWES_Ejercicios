<?php
/* Crea un array con varios objetos Libro y Revista.
Define una función mostrarColeccion($items) que recorra el array y llame al método mostrarInfo() de cada objeto.
Observa cómo, aunque se llamen igual, cada clase ejecuta su propia versión del método. */
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
$miLibro2 = new Libro("Oliver Twist", 1838, "Charles Dickens");

$miRevista = new Revista("Hola", 2025, "Hola S.L", 4234 );
$miRevista2 = new Revista("Jugón", 2025, "Panini", 222);

$array = [$miLibro, $miLibro2, $miRevista, $miRevista2];
mostrarColeccion($array);

function mostrarColeccion($items){
    foreach ($items as $item){
        $item->mostrarInfo();
    }
}