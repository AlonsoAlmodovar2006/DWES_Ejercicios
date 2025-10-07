<?php
namespace Alonsoad\Ejercicio1\Routes;

use Alonsoad\Ejercicio1\Controllers\HomeController;

$ruta = $_SERVER['REQUEST_URI'];
$controller = new HomeController();

error_log($ruta);

switch($ruta){
    case '/':
        echo $controller->index();
        break;
    case '/formulario':
        $controller->formulario();
        break;
    case '/procesar':
        $controller->procesar($_POST);
        break;
    case '/about':
        $controller->about();
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
}