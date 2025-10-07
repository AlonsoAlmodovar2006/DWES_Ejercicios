<?php

namespace Alonsoad\Ejercicio1\Controllers;

class HomeController {
    public function index() {
        $filePath = __DIR__ . '/../Views/home.html';
        if (file_exists($filePath)){
            echo file_get_contents($filePath);
        }else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }

    public function formulario(){
        $filePath = __DIR__ . '/../Views/formulario.html';
        if (file_exists($filePath)){
            echo file_get_contents($filePath);
        }else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }

    public function procesar($data){
        if (isset($data['nombre']) && !empty($data['nombre'])){
            $nombre = htmlspecialchars($data['nombre']);
            echo "<h1>¡Hola, {$nombre}! Bienvenido a nuestra página</h1>";
            echo "<a href='/'>Volver</a>";
        }else{
            echo "<h1>Introduce un nombre válido</h1>";
        }
    }

    public function about(){
        $filePath = __DIR__ . '/../Views/sobreNosotros.html';
        if (file_exists($filePath)){
            echo file_get_contents($filePath);
        }else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}