<?php

// Fitxer per crear el contenidor de dependencies per gestionar i accedir a les dependencies de
// l'aplicació de forma centralitzada
namespace Core;
use Exception;

class App{
    //Creem variable per al contenidor de dependencies
    private static $container;

    //Creem funcio per enllaçar dependencia al contenidor
    public static function bind($key, $value){
        static::$container[$key] = $value;
    }

    //Creem funcio per recuperar la dependencia
    public static function get($key){
        //mirem si la key no existeix per llançar error
        if(!array_key_exists($key, static::$container)){
            throw new Exception("No key '{$key}' is bound in container");
        }

        //retornem contenidor
        return static::$container[$key];
    }
}