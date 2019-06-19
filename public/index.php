<?php

require_once '../errors.php';
require_once '../vendor/autoload.php';
require_once '../conect_orm.php';

use Aura\Router\RouterContainer;

// si esta definido y tien¡e un v+alor
// if(isset($_GET['route']) && (!empty($_GET['route']))){
//     $route = $_GET['route'];
// }else{
//     $route = '/';
// }

// $route = $_GET['route'] ?? '/';

 
// if($route == '/'){
//     require '../index.php';
// }elseif($route == 'addJob'){
//     require '../addJob.php';
// }elseif ($route == 'addProject'){
// 	require '../addProject,php';
// }

// switch ($route) {
//     case '/':
//     require '../index.php';
//     break;
//     case 'addJob':
//     require '../addJob.php';
//     break;
//     case 'addProject':
//     require '../addProject,php';
//     break;
// }

// var_dump($request->getUri()->getPath());

// create a server request object
$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

//Manejos de rutas
$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();

// $map->get('index', '/cv-php-orm', '../index.php');
$map->get('index', '/cv-php-orm', [
    'controller' => 'App\Controllers\IndexController',
    'action' => 'indexAction'
]);

$map->get('addJobs', '/cv-php-orm/jobs/add', '../addJob.php');
$map->get('addProjests', '/cv-php-orm/projects/add', '../addProject.php');


$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
if (!$route) {
    echo ' No route found ';
} else {
    $handlerData = $route->handler;
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];

    $controller = new $controllerName;
    $controller->$actionName($request);

}


// var_dump($request->$route->handler);

var_dump($route->handler);

