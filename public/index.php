<?php

require '../vendor/autoload.php';

use M2i\Tpcrudbook\App;

$app = new App();
// Ligne utile que si on ne fait pas "php -S ..."
// $app->setBasePath('/poo/06-mvc/public');

// Toutes les routes du site
$app->addRoutes([
    ['GET', '/', 'HomeController@index'],
    ['GET', '/list', 'BookController@list'],
    ['GET', '/creat', 'BookController@creat'],
]);

// Lancer l'application
$app->run();
