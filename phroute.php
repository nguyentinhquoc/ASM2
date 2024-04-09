<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();




$router->get('/dangxuat', [App\Controllers\LoginController ::class,'LogOut']);
$router->get('/dangnhap', [App\Controllers\LoginController ::class,'Login']);
$router->post('/dangnhap', [App\Controllers\LoginController ::class,'LoginPost']);
$router->get('/dangky', [App\Controllers\RegisterController ::class,'Register']);
$router->post('/dangky', [App\Controllers\RegisterController ::class,'RegisterPost']);
$router->get('/', [App\Controllers\UserControllers\HomeController ::class,'loadHome']);
$router->group(
    ['prefix' => 'SanPham'],
    function ($router) {
        $router->get('/Page_{page}', [App\Controllers\UserControllers\ListController::class, 'listAll']);
        $router->post('/Page_{page}', [App\Controllers\UserControllers\ListController::class, 'listAll']);
        $router->get('/listSanPham/{iddm}/Page_{page}', [App\Controllers\UserControllers\ListController::class, 'list']);
        $router->post('/listSanPham/{iddm}/Page_{page}', [App\Controllers\UserControllers\ListController::class, 'list']);
        $router->get('/{id}', [App\Controllers\UserControllers\DetailController::class, 'detail']);
    }
);
$router->group(
    ['prefix' => 'admin'],
    function ($router) {
        $router->get('/setupSp/{id}', [App\Controllers\AdminControllers\ListController::class, 'setupSp']);
        $router->get('/1', [App\Controllers\AdminControllers\ListController::class, 'list1']);
        $router->get('/0', [App\Controllers\AdminControllers\ListController::class, 'list0']);
        $router->get('/', [App\Controllers\AdminControllers\ListController::class, 'listAll']);
        $router->get('/add', [App\Controllers\AdminControllers\AddController::class, 'addSanPhamGet']);
        $router->post('/add', [App\Controllers\AdminControllers\AddController::class, 'addSanPhamPost']);
        $router->get('/edit/{id}', [App\Controllers\AdminControllers\EditController::class, 'editSanPhamGet']);
        $router->post('/edit/{id}', [App\Controllers\AdminControllers\EditController::class, 'editSanPhamPost']);
        $router->get('/delete/{id}', [App\Controllers\AdminControllers\ListController::class, 'deleteSanPham']);
        // $router->get('/Nike', [App\Controllers\UserControllers\ListController::class, 'listNike']);
        // $router->get('/Jordan', [App\Controllers\UserControllers\ListController::class, 'listJordan']);
        // $router->get('/MLB', [App\Controllers\UserControllers\ListController::class, 'listMlb']);
        // $router->get('/{id}', [App\Controllers\UserControllers\DetailController::class, 'detail']);
    }
);
// $router->get('/list', [App\Controllers\ListController ::class,'addGet']);
// $router->get('/edit/{id}', [App\Controllers\ProductController ::class,'editGet']);
// $router->post('/add', [App\Controllers\ProductController ::class,'addPost']);
// $router->post('/edit/{id}', [App\Controllers\ProductController ::class,'editPost']);
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>