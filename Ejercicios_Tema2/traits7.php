<?php
/* Crea una clase abstracta MaterialBiblioteca con:
 - Propiedades comunes (titulo, autor, anio) 
 - Un método abstracto mostrarInfo()
 - Un método concreto esAntiguo() que devuelva true si el año es menor a 2000*/
interface Prestable
{
    public function prestar();

    public function devolver();

    public function estaPrestado();
}

abstract class MaterialBiblioteca
{
    protected $titulo;
    protected $autor;
    protected $anio;

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        return $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        return $this->autor = $autor;
    }

    public function getAnio()
    {
        return $this->anio;
    }

    public function setAnio($anio)
    {
        if ($anio > date("Y")) {
            echo "ERROR. No puede ser más grande el año que el actual. Año = 0";
            return $this->anio = 0;
        } else {
            return $this->anio = $anio;
        }
    }

    public function __construct($titulo, $anio, $autor)
    {
        $this->setTitulo($titulo);
        $this->setAnio($anio);
        $this->setAutor($autor);
    }

    public function __destruct()
    {
        echo "Objeto destruido\n";
    }

    public function esAntiguo(){
        if ($this->anio < 2000){
            return true;
        }else{
            return false;
        }
    }

    abstract public function mostrarInfo();
}
class Libro extends MaterialBiblioteca implements Prestable
{
    public $estaPrestado = false;

    public function mostrarInfo()
    {
        echo $this->titulo . " (" . $this->anio . ") - " . $this->autor . "\n";
    }

    public function estaPrestado()
    {
        if ($this->estaPrestado) {
            echo "Si está prestado\n";
        } else {
            echo "No está prestado\n";
        }
    }
    public function devolver()
    {
        if ($this->estaPrestado) {
            $this->estaPrestado = false;
        }
    }
    public function prestar()
    {
        if (!$this->estaPrestado) {
            $this->estaPrestado = true;
        } else {
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

$array = [$miLibro, $miLibro2, $miRevista, $miRevista2];
mostrarColeccion($array);

function mostrarColeccion($items)
{
    foreach ($items as $item) {
        $item->mostrarInfo();
    }
}
