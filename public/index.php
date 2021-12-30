<?php
spl_autoload_register(function ($class){
    $root = dirname(__DIR__);
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if(file_exists($file)){
        require_once $file;
    }
});
//require '../libs/Router.php';
//require '../libs/DB.php';
//require '../app/controllers/HomeController.php';
use app\controllers\HomeController;





$route = new libs\Router();
$route->register('GET', '/todo', [HomeController::class, 'showPost']);
//$route->register('GET', '/todo/{id}', [HomeController::class, 'deletePost']);
//echo "<bre>";
//var_dump($route->getRouteTable());
//$route->register('GET', '/home/index/{id}', [HomeController::class, 'showPost']);
//$a = $route->getRouteTable();
////var_dump($a);
//$b = $route->getRoute();
//var_dump($b);
$route->dispatch();
//$db = new \libs\DB();
//$db->getData();
//$db->insertData(['CongViec' => 'test', 'NgayLam' => '09/01/2021', 'TrangThai' => 'Hoan Thanh']);
