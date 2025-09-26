<?php
/* Crea una interfaz Prestable con los métodos: prestar(), devolver(), estaPrestado().
Haz que la clase Libro la implemente, y gestiona con una propiedad booleana si está prestado o no. */
interface Prestable {
    public function prestar();

    public function devolver();

    public function estaPrestado();
}
class Libro implements Prestable {
    public $titulo;
    public $autor;
    public $anio;
    public $estaPrestado = false;

    public function __construct($titulo, $anio, $autor) {
        $this->titulo = $titulo;
        $this->anio = $anio;
        $this->autor = $autor;
    }

    public function __destruct() {
        echo "Objeto destruido\n";
    }

    public function mostrarInfo() {
        echo $this->titulo . " (" . $this->anio . ") - " . $this->autor . "\n";
    }

    public function estaPrestado() {
        if ($this->estaPrestado) {
            echo "Si está prestado\n";
        } else {
            echo "No está prestado\n";
        }
    }
    public function devolver() {
        if($this->estaPrestado){
            $this->estaPrestado = false;
        }
        
    }
    public function prestar() {
        if(!$this->estaPrestado){
            $this->estaPrestado = true;
        } else{
            echo "Ya está prestado\n";
        }
    }
}

class Revista extends Libro
{
    public $numeroEdicion;

    public function __construct($titulo, $anio, $autor, $numeroEdicion)
    {
        parent::__construct($titulo, $anio, $autor);
        $this->numeroEdicion = $numeroEdicion;
    }

    public function mostrarInfo()
    {
        echo $this->titulo . " (" . $this->anio . ") - " . $this->autor . ". Edición: " . $this->numeroEdicion . "\n";
    }
}

$miLibro = new Libro("El Tesoro de David", 1865, "Charles Spurgeon");
$miLibro2 = new Libro("Oliver Twist", 1838, "Charles Dickens");

$miLibro->prestar();
$miLibro->estaPrestado();
$miLibro->prestar();

$miRevista = new Revista("Hola", 2025, "Hola S.L", 4234);
$miRevista2 = new Revista("Jugón", 2025, "Panini", 222);

