<?php

namespace Alonsoad\Formulario\Routes;

class Router
{
    private $routes = [];

    public function __construct()
    {
        $this->loadroutes();
    }

    public function loadRoutes()
    {
        $this->routes['/'] = ['controller' => 'HomeController', 'action' => 'index'];
        $this->routes['/respuesta'] = ['controller' => 'HomeController', 'action' => 'validarEntrada'];
    }

    public function handleRequest()
    {
        $path = $_SERVER['REQUEST_URI'];
        error_log("path: " . $path);
        if (isset($this->routes[$path])) {
            $ruta = $this->routes[$path];
            $controllerClass = "Alonsoad\\Formulario\\Controllers\\" . $ruta['controller'];
            $action = $ruta['action'];
            error_log("ruta: " . $ruta['controller'] . "  action: " . $action);

            if (class_exists($controllerClass) && method_exists($controllerClass, $action)) {
                $controller = new $controllerClass();
                $controller->$action($_REQUEST);
            } else {
                http_response_code(404);
                echo "404 Hola";
            }
        } else {
            http_response_code(404);
            echo "404 Server";
        }
    }
}

$router = new Router();
$router->handleRequest();
