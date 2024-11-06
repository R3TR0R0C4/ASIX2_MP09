<?php
//Fitxer per gestionar les rutes
namespace Core;

use http\Exception\RuntimeException;

class Route
{
    //creem array per les rutes
    protected $routes = [];

    //creem funcio per afegir les rutes a l'array
    public function register($route)
    {
        //li assignem a la variable routes en this la variable route que li passem a la funció
        $this->routes[] = $route;
    }

    //funcio per rebreun array de rutes i assignar a la propietar routes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    //funcio per redirigir la url solicitada a un controlador
    public function redirect($uri){
        foreach ($this->routes as $route => $action){
            $pattern = preg_replace('/\{[^\/]+\}/','([^/]+)', $route);
            $patter = "#^$pattern$#i";
            if(preg_match($patter, $uri, $matches)){
                array_shift($matches);

                list($controller, $action) = explode('@', $action);

                $controllerClass = 'App\\Controllers\\' . basename($controller, '.php');

                if(!class_exists($controllerClass)){
                    throw new RuntimeException("Controller $controllerClass not found");
                }

                $controller = new $controllerClass();

                if (!method_exists($controller, $action)) {
                    throw new RuntimeException("Action $action not found in controller $controllerClass");
                }

                return $controller->$action(...$matches);
            }
        }

        //retornem les rutes
        require '../resources/views/errors/404.blade.php';
        return require $this;
    }


}