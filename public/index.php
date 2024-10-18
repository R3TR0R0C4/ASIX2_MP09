<?php
//    require 'app/index.php';
//    require 'resources/views/index.blade.php';

//carreguem el fitxer autoload que carrega les dependencies
//i tambe les classes definides als espais de noms
use Core\App;

require '../vendor/autoload.php';

require '../Core/bootstrap.php';

App::get('router')->redirect($_SERVER['REQUEST_URI']);