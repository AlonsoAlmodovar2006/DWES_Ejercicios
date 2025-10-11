<?php
namespace Alonsoad\Modviscon1\Routes;

class Router{
    private $routes = [];

    public function __construct()
    {
        $this->loadRoutes();
    }

    public function loadRoutes(){
        $this->routes['/'] = ['controller' => 'HomeController', 'action' => 'index'];
    }

    public function handleRequest(){
        $path = $_SERVER['REQUEST_URI'];
        error_log("ruta: " . $path);
        if (isset($this->routes[$path])) {
            $route = $this->routes[$path];
            $controllerClass = "Alonsoad\\Modviscon1\\Controllers\\" . $route['controller'];
            $action = $route['action'];
            error_log("ruta: " . $route['controller'] . "\naction: ". $action);

            if (class_exists($controllerClass) && method_exists($controllerClass, $action)) {
                $controller = new $controllerClass();
                $controller->$action($_REQUEST);
            } else{
                http_response_code(404);
                echo "Error 404";
            }
        } else{
            http_response_code(404);
            echo "Server 404";
        }
    }
}

$router = new Router();
$router->handleRequest();
