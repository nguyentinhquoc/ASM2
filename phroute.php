<?php
use Phroute\Phroute\RouteCollector;
$url = !isset($_GET['url']) ? "/" : $_GET['url'];
$router = new RouteCollector();
$router->get('/test', [App\Controllers\UserControllers\LienheController::class, 'test']);
$router->get('/Lienhe', [App\Controllers\UserControllers\LienheController::class, 'LienHeGet']);
$router->post('/Lienhe', [App\Controllers\UserControllers\LienheController::class, 'LienHePost']);
$router->get('/dangxuat', [App\Controllers\LoginController::class, 'LogOut']);
$router->get('/dangnhap', [App\Controllers\LoginController::class, 'Login']);
$router->post('/dangnhap', [App\Controllers\LoginController::class, 'LoginPost']);
$router->get('/dangky', [App\Controllers\RegisterController::class, 'Register']);
$router->post('/dangky', [App\Controllers\RegisterController::class, 'RegisterPost']);
$router->get('/', [App\Controllers\UserControllers\HomeController::class, 'loadHome']);
$router->group(
    ['prefix' => 'SanPham'],
    function ($router) {
        $router->get('/Page_{page}', [App\Controllers\UserControllers\ListController::class, 'listAll']);
        $router->post('/Page_{page}', [App\Controllers\UserControllers\ListController::class, 'listAll']);
        $router->get('/listSanPham/{iddm}/Page_{page}', [App\Controllers\UserControllers\ListController::class, 'list']);
        $router->post('/listSanPham/{iddm}/Page_{page}', [App\Controllers\UserControllers\ListController::class, 'list']);
        $router->get('/{id}', [App\Controllers\UserControllers\DetailController::class, 'detail']);
        $router->post('/{id}', [App\Controllers\AjaxController\DetailController::class, 'test']);
    }
);
$router->group(
    ['prefix' => 'admin'],
    function ($router) {
        $router->get('/1', [App\Controllers\AdminControllers\ListController::class, 'list1']);
        $router->post('/1', [App\Controllers\AdminControllers\ListController::class, 'list1TK']);
        $router->post('/0', [App\Controllers\AdminControllers\ListController::class, 'list0TK']);
        $router->get('/0', [App\Controllers\AdminControllers\ListController::class, 'list0']);
        $router->post('/', [App\Controllers\AdminControllers\ListController::class, 'listAllTK']);
        $router->get('/', [App\Controllers\AdminControllers\ListController::class, 'listAll']);
        $router->get('/setupSp/{id}', [App\Controllers\AdminControllers\ListController::class, 'setupSp']);
        $router->get('/add', [App\Controllers\AdminControllers\AddController::class, 'addSanPhamGet']);
        $router->post('/add', [App\Controllers\AdminControllers\AddController::class, 'addSanPhamPost']);
        $router->get('/edit/{id}', [App\Controllers\AdminControllers\EditController::class, 'editSanPhamGet']);
        $router->post('/edit/{id}', [App\Controllers\AdminControllers\EditController::class, 'editSanPhamPost']);
        $router->get('/detail/{id}', [App\Controllers\AdminControllers\DetailController::class, 'detailSanPham']);
        $router->get('/delete/{id}', [App\Controllers\AdminControllers\ListController::class, 'deleteSanPham']);
        $router->get('/LienHe', [App\Controllers\AdminControllers\LienHeController::class, 'LienHe']);
        $router->get('/delete/LienHe/{id}', [App\Controllers\AdminControllers\LienHeController::class, 'deleteLienHe']);
        $router->get('/edit/TaiKhoan/{id}', [App\Controllers\AdminControllers\TaiKhoanController::class, 'TaiKhoanEdit']);
        $router->get('/delete/TaiKhoan/{id}', [App\Controllers\AdminControllers\TaiKhoanController::class, 'TaiKhoanDelete']);
        $router->get('/TaiKhoan', [App\Controllers\AdminControllers\TaiKhoanController::class, 'TaiKhoan']);
    }
);
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
echo $response;
