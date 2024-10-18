<?php
//el fitxer bootstrap s'encarrega de configurar i inicialitzar les dependencies
//carregar les configuracions, inicialitzar les dependencies com la base de dades o el router

use Dotenv\Dotenv; //Carregar les variables d'entorn
use Core\App; //Importar el contenidor de dependencies
use Core\Database\Connection; //importar connection per a la connexió a la bd
use Core\Database\Database; //importar database per fer les operacions a la bd
use Core\Route; //carregar la gestió per a l'enrutament

//Creant una variable carreguem el fitxer de rutes
$routes = require '../routes.php';

//Creant una variable carreguem les variables d'entorn
//$dotenv = Dotenv::createImmutable(__DIR__.'/..');
//$dotenv->load(); //carreguem variables
//
////enllacem l'arxiu config al contenidor com a config on tenim les variables d'entorn
//App::bind('config', require '../config.php');
//
////enllacem instancia de database
//App::bind('database', new Database(
//    Connection::make(
//        App::get('config')['database']
//    )
//));

//enllacem instancia rutes
App:bind('router', (new Route())->define($routes));
