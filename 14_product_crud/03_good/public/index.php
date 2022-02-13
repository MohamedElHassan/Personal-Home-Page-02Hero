<?php

require_once __DIR__.'/../vendor/autoload.php';
// require_once '../controllers/ProductController.php';

use app\Router;
use app\controllers\ProductController;

$router = new Router();
$productController = new ProductController();

$router->get('/',[$productController,'index']);
$router->get('/products',[$productController,'index']);
$router->get('/products/create',[$productController, 'create']);
$router->post('/products/create',[$productController, 'create']);
$router->get('/products/update',[$productController, 'update']);
$router->post('/products/update',[$productController, 'update']);
$router->post('/products/delete',[$productController, 'delete']);

$router->resolve();