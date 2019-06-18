<?php

require_once '../errors.php';
require_once '../vendor/autoload.php';
require_once '../conect_orm.php';

// si esta definido y tien¡e un v+alor
// if(isset($_GET['route']) && (!empty($_GET['route']))){
//     $route = $_GET['route'];
// }else{
//     $route = '/';
// }

$route = $_GET['route'] ?? '/';

 
// if($route == '/'){
//     require '../index.php';
// }elseif($route == 'addJob'){
//     require '../addJob.php';
// }elseif ($route == 'addProject'){
// 	require '../addProject,php';
// }

switch ($route) {
    case '/':
    require '../index.php';
    break;
    case 'addJob':
    require '../addJob.php';
    break;
    case 'addProject':
    require '../addProject,php';
    break;
}