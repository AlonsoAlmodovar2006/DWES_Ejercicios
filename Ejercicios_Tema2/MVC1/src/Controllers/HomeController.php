<?php

namespace Alonsoad\Modviscon1\Controllers;

class HomeController {
    public function index(){
        $archivo = __DIR__ . '/../Views/listaUsuarios.html';
        if (file_exists($archivo)){
            echo file_get_contents($archivo);
        } else { 
            http_response_code(404);
            echo "404 Not Found";
        }
    }

    /*public function procesarUsuario($data) {
        if (isset($data[]))
    }*/
}