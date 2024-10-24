<?php
//    require 'app/index.php';
//    require 'resources/views/index.blade.php';

//carreguem el fitxer autoload que carrega les dependencies
//i tambe les classes definides als espais de noms
use Core\App;

//require '../vendor/autoload.php';
require __DIR__ . '/../vendor/autoload.php';

//require '../Core/bootstrap.php';
require __DIR__ . '/../Core/bootstrap.php';

App::get('router')->redirect($_SERVER['REQUEST_URI']);