<?php
//Fitxer per gestionar les rutes
namespace Core;

class Route{
    //creem array per les rutes
    protected $routes = array();

    //creem funcio per afegir les rutes a l'array
    public function register($route){
        //li assignem a la variable routes en this la variable route que li passem a la funcio
        $this->routes[] = $route;
    }

    //funcio per rebre un array de rutes i assignar a la propietar routes
    public function define($route){
        $this->routes[] = $route;
        return $this;
    }

    //funcio per redirigir la url solicitada a un controlador
    public function redirect($uri){
        if(!array_key_exists($uri, $this->routes)){
            //retornem vista
            require '../resources/views/errors/404.blade.php';
            //retornem ruta
            return $this;
        }

        //si no hem trobat el controlador
        if(!file_exists($this->routes[$uri])){
            throw new \Exception("Route '{$uri}' does not exist.");
        }
        return $this->routes[$uri];
    }

}